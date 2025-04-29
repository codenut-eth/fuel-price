<?php



use App\Http\Controllers\ComplaintController;

use App\Http\Controllers\FuelPriceController;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\FeedbackController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\StationController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\VehicleController;

use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('index');



// AJAX endpoint for fetching stations

Route::get('/get-stations',[HomeController::class, 'getStations']);
Route::get('/address-suggestions', [HomeController::class, 'suggestAddresses']);
Route::get('/stations/find', [HomeController::class, 'findStations'])->name('stations.find');

Route::get('/feedbacks/{stationId}', [StationController::class, 'getFeedbacks']);



// Fuel Price Routes

Route::post('/fuel-prices', [FuelPriceController::class, 'store'])->name('fuel_prices.store');

Route::post('/fuel-prices/results', [FuelPriceController::class, 'fetchResults'])->name('fuel_prices.results');

Route::get('/stations/check', [FuelPriceController::class, 'checkStationExists'])->name('stations.check');

Route::get('/stations/search', [FuelPriceController::class, 'searchStations']);


//about us page
Route::get('/about-us',[HomeController::class, 'about_us'])->name('about-us');


// Login Routes

Route::get('/login', function () {

    return view('auth.login');
})->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');



// Logout Route

Route::any('/logout', [AuthController::class, 'logout'])->name('logout');



// Registration Routes

Route::get('/register', function () {

    return view('auth.register');
})->name('register')->middleware('guest');

Route::post('/register', [AuthController::class, 'register'])->name('register.submit');



// Registration Routes

Route::get('/forgot', function () {

    return view('auth.forgot');
})->name('forgot')->middleware('guest');

Route::post('/forgot', [AuthController::class, 'forgot'])->name('forgot.submit');


Route::match(['GET','POST'],'password/reset/{token}', [AuthController::class, 'showResetForm'])
    ->name('password.reset');

// Protected Route Example

// User Profile Routes

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('/userprofile', [UserController::class, 'showProfile'])->name('user.profile');

    Route::post('/userprofile/update', [UserController::class, 'updateProfile'])->name('user.updateProfile');

    Route::post('/userprofile/reset-password', [UserController::class, 'resetPassword'])->name('user.resetPassword');



    Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaints.index');

    Route::get('/complaints/create', [ComplaintController::class, 'create'])->name('complaints.create');

    Route::post('/complaints/store', [ComplaintController::class, 'store'])->name('complaints.store');

    Route::post('/complaints/{complaint}/reply', [ComplaintController::class, 'reply'])->name('complaints.reply');
});



// Routes accessible only by Users

Route::group(['middleware' => ['role:User']], function () {

    Route::get('/vehicle', [VehicleController::class, 'index'])->name('vehicle.index');

    Route::get('/vehicle/create', [VehicleController::class, 'create'])->name('vehicle.create');

    Route::post('/vehicle/store', [VehicleController::class, 'store'])->name('vehicle.store');

	

    Route::get('/feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');

    Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');
	
	Route::get('/feedback/view', [FeedbackController::class, 'index'])->name('feedback.view');
});



// Routes accessible only by Station Managers

Route::group(['middleware' => ['role:Station Manager']], function () {

    // View all stations managed by the station manager

    Route::get('/stations', [StationController::class, 'index'])->name('stations');

    // Show the form to create a new station

    Route::get('/stations/create', [StationController::class, 'create'])->name('stations.create');

    // Store a new station

    Route::post('/stations', [StationController::class, 'store'])->name('stations.store');
});
	
	