<?php

use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\GuestController;
use App\Http\Controllers\Api\InvitationController;
use App\Http\Controllers\Api\UserController;
use App\Models\Guest;
use App\Models\Template;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/loginPage', [AuthController::class, 'loginPage'])->name('loginPage');
Route::get('/registerPage', [AuthController::class, 'registerPage'])->name('registerPage');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/desain', [InvitationController::class, 'index'])->name('desain');
    Route::get('/input-data/{id}', [InvitationController::class, 'nextForm'])->name('input-data');
    Route::post('/input-data/input-form/{id}', [InvitationController::class, 'createInvit'])->name('input-form');
    Route::get('/undangan/{id}', [InvitationController::class, 'show'])->name('undangan');

    // Admin
    Route::get('/list-acount', function () {
        $user = User::all();
        return view('pages.admin.list-acount', ['user' => $user]);
    });

    Route::post('/destroy/{id}', [AdminController::class, 'destroyUser'])->name('destroy');
    Route::post('/destroyGuest/{id}', [AdminController::class, 'destroyGuest'])->name('destroyGuest');
    Route::post('/destroyTemplate/{id}', [AdminController::class, 'destroyTemplate'])->name('destroyTemplate');

    Route::get('/list-guest', function () {
        $guest = Guest::all();
        return view('pages.admin.list-guest', ['guest' => $guest]);
    });

    Route::get('/list-template', function () {
        $temp = Template::all();
        return view('pages.admin.listTemplate', ['temp' => $temp]);
    });
    Route::get('/buat-template', function () {
        return view('pages.admin.buatTemplate');
    });

    Route::post('/storeTemplate', [AdminController::class, 'storeTemplate'])->name('storeTemplate');
});


// Guest Punya
Route::get('/guest/{id}', [GuestController::class, 'index'])->name('guest');
Route::post('/store/{id}', [GuestController::class, 'store'])->name('store');
Route::get('/show-guest-undangan/{id}', [GuestController::class, 'show'])->name('show');

// Route::get('/input-data', function () {
//     return view('pages.component.form');
// });

// Route::get('/admin', function () {
//     return view('pages.admin.admin');
// });

// Route::get('/desain', function () {
//     return view('pages.component.templates.pilihTemplate');
// });
// Route::get('/login', function () {
//     return view('pages.Login');
// });

// Route::get('/register', function () {
//     return view('pages.Register');
// });

// Route::get('/pofile', function () {
//     return view('pages.user.profile');
// });

Route::get('/FAQ', function () {
    return view('pages.user.FAQ');
});

Route::get('/contactus', function () {
    return view('pages.user.contact');
});


Route::get('/live-preview', function () {
    return view('pages.component.desainB');
});

// Route::get('/form', function () {
//     return view('pages.component.form');
// });

// Route::get('/guest', function () {
//     return view('pages.component.guest');
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/list-user', function () {
//         return view('pages.admin.admin');
//     });
//     Route::get('/list-acount', function () {
//         return view('pages.admin.admin');
//     });
// });
Route::get('/mig', function () {
    // Call and Artisan command from within your application.
    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');
    shell_exec('npm run dev');
});

Route::get('/cc', function () {
    // Call and Artisan command from within your application.
    Artisan::call('config:clear');
});