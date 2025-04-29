<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Password;


class UserController extends Controller
{
    // Show User Profile
    public function dashboard()
    {
        return view('dashboard');
    }

    public function showProfile()
    {
        return view('userprofile', ['authUser' => Auth::user()]);
    }

    // Update User Profile
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validation rules
        $rules = [
            'first_name' => 'required|string|max:255',
            'surname'  => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email,' . $user->id,
            'date_of_birth' => ['required', 'date', 'before:-18 years'],
            'phone1' => [
                'required',
                'regex:/^(07|08|09)[0-9]{8}$/'
            ],
            // 'phone2' => 'required|string|max:20',
            'street_address' => 'required|string|max:255',
            'city' => 'string|string|max:255',
            'state' => 'string|string|max:255',
            'country' => 'string|string|max:255',
            'zip' => 'nullable|string|max:10',
            'photo'      => 'nullable|image|max:2048', // Max 2MB
            'identity_doc'      => 'required|image|max:2048', // Max 2MB
            'make' => 'nullable|string|max:255',
            'model' => 'nullable|string|max:255',
            'rego' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:255',
        ];

        // Define custom validation messages
        $messages = [
            'role.required' => 'Role is required.',
            'role.in' => 'Invalid role selected.',
            'first_name.required' => 'First name is required.',
            'surname.required' => 'Surname is required.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email address is already taken.',
            'date_of_birth.required' => 'This dob is required.',
            'phone1.required' => 'This phone number is required.',
            'street_address.required' => 'This Street address  is required.',
            'required.required' => 'This phone number is required.',
            'photo.image' => 'Profile photo must be an image.',
            'photo.mimes' => 'Profile photo must be a file of type: jpg, jpeg, png.',
            'photo.max' => 'Profile photo may not be greater than 2MB.',
            'identity_doc.required' => 'This Identity Document is required.',
            'identity_doc.image' => 'Identity Document must be an image.',
            'identity_doc.mimes' => 'Identity Document must be a file of type: jpg, jpeg, png.',
            'identity_doc.max' => 'Identity Document may not be greater than 2MB.',
            'station_id.required' => 'Station ID is required for Station Managers.',
            'station_id.string' => 'Station ID must be a string.',
            'station_id.max' => 'Station ID cannot exceed 255 characters.',
            'station_name.required' => 'Station Name is required for Station Managers.',
            'station_name.string' => 'Station Name must be a string.',
            'station_name.max' => 'Station Name cannot exceed 255 characters.',
        ];

        // Validate the incoming request data
        $validator = Validator::make($request->all(), $rules, $messages);


        // If validation fails, return errors
        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        $user->update($request->except('photo'));
        $user->update($request->except('identity_doc'));

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->store('uploads/user', 'public');
            $user->update(['photo' => $photoPath]);
        }
        
        // Handle photo upload
        if ($request->hasFile('identity_doc')) {
            $identity_doc = $request->file('identity_doc');
            $identity_docPath = $identity_doc->store('uploads/user', 'public');
            $user->update(['identity_doc' => $identity_docPath]);
        }

        return response()->json(['status' => 1, 'message' => 'Profile updated successfully.']);
    }

    // Reset User Password
    public function resetPassword(Request $request)
    {
        $user = Auth::user();
		$email_address=$user->email;
        // Validation rules
		/*
        $rules = [
            'opass' => 'required',
            'npass' => 'required|min:6',
            'cpass' => 'required|same:npass',
        ];
		*/

        // Custom error messages
		/*
        $messages = [
            'cpass.same' => 'The confirmation password does not match.',
        ];
		*/
        // Validate the request
		/*
        $validator = Validator::make($request->all(), $rules, $messages);

        // If validation fails, return errors
        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }
		
        // Check if old password matches
        if (!Hash::check($request->opass, $user->password)) {
            return response()->json([
                'status' => 0,
                'errors' => ['opass' => ['Old password is incorrect.']]
            ], 422);
        }

        // Update password
        $user->password = Hash::make($request->npass);
		*/
        $credentials = ['email' => $email_address];
        // $response = Password::sendResetLink($credentials, function (Message $message) {
        //     $message->subject($this->getEmailSubject());
        // });
        
         $status = Password::sendResetLink(
            $credentials
        );

        // dd($status);
        if ($status === Password::RESET_LINK_SENT) {
              return redirect()->back();
        }


        // switch ($response) {
        //     case Password::RESET_LINK_SENT:
        //         return redirect()->back()->with('status', trans($response));
        //     case Password::INVALID_USER:
        //         return redirect()->back()->withErrors(['email' => trans($response)]);
        // }

		/*
		
		
        $user->save();

        return response()->json(['status' => 1, 'message' => 'Password reset successfully.']);
		*/
    }
}
