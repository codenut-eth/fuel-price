<?php



namespace App\Http\Controllers;



use App\Models\User;

use App\Services\IDGeneratorService;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Password;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;



class AuthController extends Controller

{

    public function login(Request $request)

    {

        // Validation

        $validator = Validator::make($request->all(), [

            'email' => 'required|email',

            'password' => 'required',

        ]);



        // If validation fails

        if ($validator->fails()) {

            return response()->json(['status' => 0, 'errors' => $validator->errors()], 422);
        }



        // If user not approved yet

        $user = User::where('email', $request->email)->first();

        if ($user && in_array($user->approved_by, ['Pending', 'Rejected', null, 'Admin'])) {

            return response()->json(['status' => 0, 'message' => 'Your account is not approved yet.']);
        }



        // Credentials

        $credentials = $request->only('email', 'password');



        // Attempt to login

        if (Auth::attempt($credentials)) {

            $user = Auth::user();
            if($user->identity_doc == null){
                return response()->json(['status' => 2, 'message' => 'Login successfully.']);
            }else{
                return response()->json(['status' => 1, 'message' => 'Login successfully.']);
            }


        }



        // Authentication failed

        return response()->json(['status' => 0, 'message' => 'Email or Password not matched.']);
    }



    public function logout(Request $request)

    {

        Auth::logout();

        Session::flush();



        return response()->json(['message' => 'Logged out successfully.']);
    }



    public function register(Request $request)

    {

        // Validation rules

        $rules = [

            'role'       => 'required|in:User,Station Manager',

            'first_name' => 'required|string|max:255',

            'surname'  => 'required|string|max:255',

            'email'      => 'required|email|unique:users,email',

            'password'   => 'required|string|min:6|confirmed',

            // 'title_id' => 'nullable|integer', // Uncomment if needed

            // 'dob' => 'required|date|before_or_equal:' . now()->subYears(18)->format('Y-m-d'),    

            // Include other fields if necessary

        ];



        // Validate the request

        $validator = Validator::make($request->all(), $rules);



        // If validation fails, return errors

        if ($validator->fails()) {

            return response()->json([

                'status' => 0,

                'errors' => $validator->errors()

            ], 422);
        }



        // here I need to choose prefix of if field according to a user role

        $prefix = $request->role === 'User' ? 'US-' : 'SM-';


        // Create the user

        $identityDocPath = null;
        
        if ($request->hasFile('identity_doc')) {
            $file = $request->file('identity_doc');
            $extension = $file->getClientOriginalExtension();
            $uniqueName = \Str::uuid() . '.' . $extension;
        
            $destinationPath = public_path('uploads/identity_docs');
            $file->move($destinationPath, $uniqueName);
        
            $identityDocPath = 'uploads/identity_docs/' . $uniqueName;
        }

        $user = User::create([

            'user_id'    => IDGeneratorService::generateId(User::max('id'), $prefix),

            'first_name' => $request->first_name,

            'surname'  => $request->surname,

            'email'      => $request->email,

            'password'   => Hash::make($request->password), // Use Laravel's Hash for security

            'title_id'   => 0,    // As per your code, title_id is set to '0'

            'date_of_birth'        => $request->date_of_birth,
            
            'street_address'        => $request->address,
            
            'phone1'        => $request->phone,
            
            'city'        => $request->city,
            
            'state'        => $request->state,

            'category'    => $request->role,

            // Add other fields as necessary

            'name' => $request->first_name . ' ' . $request->surname,

            'approved_by' => 'Pending',
            
            'identity_doc' => $identityDocPath,

        ]);



        $roleName = $request->role ?? 'User'; // Default to 'User'

        // Assign the selected role to the user

        $user->assignRole($roleName);



        return response()->json(['status' => 1, 'message' => 'Register successfully.']);
    }


    public function forgot(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 0, 'errors' => $validator->errors()], 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['status' => 0, 'message' => 'No user found with this email.']);
        }

        if (in_array($user->approved_by, ['Pending', 'Rejected', null, 'Admin'])) {
            return response()->json(['status' => 0, 'message' => 'Your account is not approved yet.']);
        }
        
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // dd($status);
        if ($status === Password::RESET_LINK_SENT) {
            return response()->json(['status' => 1, 'message' => 'Password reset link sent to your email.']);
        }

        return response()->json(['status' => 0, 'message' => 'Unable to send reset link. Please try again later.']);
    }
    
    
    
    
    public function showResetForm(Request $request,$token){
        
        if($request->ajax()){
         //   return $request->all();
                $request->validate([
                    'token'    => 'required',
                    'password' => ['required', 'confirmed', 'min:6', 'regex:/[A-Z]/'],
                ]);
                
                $status = Password::reset(
                     $request->only('email', 'password', 'password_confirmation', 'token'),
                    
                    function ($user, $password) {
                        $user->password = Hash::make($password);
                        $user->setRememberToken(Str::random(60));
                        $user->save();
                    }
                );
                
                if ($status === Password::PASSWORD_RESET) {
                return response()->json(['status' => true, 'message' => 'Password reset successful']);
                }
                
                return response()->json(['status' => false, 'message' => __($status)], 422);

            
        }
        return view('auth.reset-password',compact('token'));
    }

    
    
    
}
