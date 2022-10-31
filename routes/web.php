<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Model\ModelEnabledController;
use App\Http\Controllers\Backend\Model\ModelRestoreController;
use App\Http\Controllers\Backend\Model\ModelSoftDeleteController;
use App\Http\Controllers\Backend\Organization\SymptomController;
use App\Http\Controllers\Backend\Organization\PatientController;
use App\Http\Controllers\Backend\Organization\VaccineController;
use App\Http\Controllers\Backend\OrganizationController;
use App\Http\Controllers\Backend\Setting\PermissionController;
use App\Http\Controllers\Backend\Setting\RoleController;
use App\Http\Controllers\Backend\Setting\UserController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Frontend\Organization\ApplicantController;
use App\Http\Controllers\TranslateController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/**
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
Route::get('/', function () {
    return redirect()->to('backend/login');
})->name('home');

Route::get('translate-locale', TranslateController::class)->name('translate-locale');

Route::get('cache-clear', function () {
    Artisan::call('optimize:clear');
});

//Frontend
Route::name('frontend.')->group(function () {
    Route::name('organization.')->group(function () {
/*        Route::get('applicant-registration', [ApplicantController::class, 'create'])
            ->name('applicants.create')->middleware('guest');

        Route::post('applicant-registration', [ApplicantController::class, 'store'])
            ->name('applicants.store');*/
    });
});

Route::prefix('backend')->group(function () {
    /**
     * Authentication Route
     */
    Route::name('auth.')->group(function () {
        Route::view('/privacy-terms', 'auth::terms')->name('terms');

        Route::get('/login', [AuthenticatedSessionController::class, 'create'])
            ->middleware('guest')
            ->name('login');

        Route::post('/login', [AuthenticatedSessionController::class, 'store'])
            ->middleware('guest');

        if (config('auth.allow_register')) {
            Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

            Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');
        }

        if (config('auth.allow_password_reset')) {
            Route::get('/forgot-password', [PasswordResetController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');
        }

        Route::post('/forgot-password', [PasswordResetController::class, 'store'])
            ->middleware('guest')
            ->name('password.email');

        Route::get('/reset-password/{token}', [PasswordResetController::class, 'edit'])
            ->middleware('guest')
            ->name('password.reset');

        Route::post('/reset-password', [PasswordResetController::class, 'update'])
            ->name('password.update');

        Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
            ->middleware('auth')
            ->name('verification.notice');

        Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
            ->middleware(['auth', 'signed', 'throttle:6,1'])
            ->name('verification.verify');

        Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
            ->middleware(['auth', 'throttle:6,1'])
            ->name('verification.send');

        Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
            ->middleware('auth')
            ->name('password.confirm');

        Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
            ->middleware('auth');

        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
            ->middleware('auth')
            ->name('logout');
    });

    /**
     * Admin Panel/ Backend Route
     */
    Route::get('/', function () {
        return redirect(\route('backend.dashboard'));
    })->name('backend');

    Route::middleware(['auth'])->name('backend.')->group(function () {
        Route::get('/dashboard', DashboardController::class)
            ->name('dashboard');

/*        Route::get('applicant-registration', [ApplicantController::class, 'create'])
            ->name('applicants.create');
        Route::post('applicant-registration', [ApplicantController::class, 'store'])
            ->name('applicants.store');*/

        //Common Operations
        Route::prefix('common')->name('common.')->group(function () {
            Route::get('delete/{route}/{id}', ModelSoftDeleteController::class)->name('delete');
            Route::get('restore/{route}/{id}', ModelRestoreController::class)->name('restore');
            Route::get('enabled', ModelEnabledController::class)->name('enabled');
        });

        //Organization
        Route::get('organization', OrganizationController::class)->name('organization');
        Route::prefix('organization')->name('organization.')->group(function () {
            //Survey
            Route::prefix('patients')->name('patients.')->group(function () {
                Route::patch('{patient}/restore', [PatientController::class, 'restore'])->name('restore');
                Route::get('export', [PatientController::class, 'export'])->name('export');
            });
            Route::resource('patients', PatientController::class)->where(['patient' => '([0-9]+)']);

            //Enumerator
            Route::prefix('symptoms')->name('symptoms.')->group(function () {
                Route::get('export', [VaccineController::class, 'export'])->name('export');
                Route::get('ajax', [VaccineController::class, 'ajax'])->name('ajax')->middleware('ajax');
            });
            Route::resource('symptoms', SymptomController::class)->where(['symptom' => '([0-9]+)']);

            //Enumerator
            Route::prefix('vaccines')->name('vaccines.')->group(function () {
                Route::get('export', [VaccineController::class, 'export'])->name('export');
                Route::get('ajax', [VaccineController::class, 'ajax'])->name('ajax')->middleware('ajax');
            });
            Route::resource('vaccines', VaccineController::class)->where(['vaccine' => '([0-9]+)']);
        });

        //Setting
        Route::get('settings', SettingController::class)->name('settings');
        Route::prefix('settings')->name('settings.')->group(function () {
            //User
            Route::prefix('users')->name('users.')->group(function () {
                Route::patch('{user}/restore', [UserController::class, 'restore'])->name('restore');
                Route::get('export', [UserController::class, 'export'])->name('export');
                Route::patch('{user}/setting', [UserController::class, 'setting'])->name('setting');
            });
            Route::resource('users', UserController::class)->where(['user' => '([0-9]+)']);

            //Permission
            Route::prefix('permissions')->name('permissions.')->group(function () {
                Route::patch('{permission}/restore', [PermissionController::class, 'restore'])->name('restore');
                Route::get('/export', [PermissionController::class, 'export'])->name('export');
            });
            Route::resource('permissions', PermissionController::class)->where(['permission' => '([0-9]+)']);

            //Role
            Route::prefix('roles')->name('roles.')->group(function () {
                Route::patch('{role}/restore', [RoleController::class, 'restore'])->name('restore');
                Route::put('{role}/permission', [RoleController::class, 'permission'])
                    ->name('permission')->where(['role' => '([0-9]+)']);
                Route::get('export', [RoleController::class, 'export'])->name('export');
                Route::get('ajax', [RoleController::class, 'ajax'])->name('ajax')->middleware('ajax');
            });
            Route::resource('roles', RoleController::class)->where(['role' => '([0-9]+)']);

        });
    });
});
