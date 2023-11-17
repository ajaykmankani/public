<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CallsAndServicesController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\frontend\FormController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\KycMailController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\RolesAndPermission;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Search;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\pdf\PDFController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['middleware' => [Authenticate::class]], function () {
    Route::get('/admin', [CallsAndServicesController::class, 'index'])->name('admin');
    Route::get('history_index', [CallsAndServicesController::class, 'history_index'])->name('history_index');

    Route::get('create_call', [CallsAndServicesController::class, 'create'])->name('create_call');
    Route::post('create_call', [CallsAndServicesController::class, 'create_call'])->name('create_call');
    Route::get('delete_call/{id}', [CallsAndServicesController::class, 'delete_call'])->name('delete_call');
    Route::get('edit_call/{id}', [CallsAndServicesController::class, 'edit_call'])->name('edit_call');
    Route::post('update_call', [CallsAndServicesController::class, 'update_call'])->name('update_call');



    Route::get('create_role', [RolesAndPermission::class, 'role_index'])->name('add_role');
    Route::get('delete_role/{id}', [RolesAndPermission::class, 'delete_role'])->name('delete_role');
    Route::post('create_role', [RolesAndPermission::class, 'create_role'])->name('create_role');
    Route::get('roles_and_permission', [RolesAndPermission::class, 'index'])->name('roles_and_permission');

    Route::get('create_permission', [RolesAndPermission::class, 'permission_index'])->name('add_permission');
    Route::get('delete_permission/{id}', [RolesAndPermission::class, 'delete_permission'])->name('delete_permission');
    Route::post('create_permission', [RolesAndPermission::class, 'create_permission'])->name('create_permission');
    Route::get('assign_permissions/{id}', [RolesAndPermission::class, 'assign_permission_index'])->name('assign_permissions_index');
    Route::post('assign_permissions', [RolesAndPermission::class, 'assign_permission'])->name('assign_permissions');

    Route::get('enquiry_index', [EnquiryController::class, 'index'])->name('kyc');
    Route::get('edit_enquiry/{id}', [EnquiryController::class, 'edit_enquiry'])->name('edit_enquiry');
    Route::get('create_enquiry', [EnquiryController::class, 'create_enquiry'])->name('create_enquiry');
    Route::post('store_enquiry', [EnquiryController::class, 'store_enquiry'])->name('store_enquiry');
    Route::post('update_enquiry', [EnquiryController::class, 'update_enquiry'])->name('update_enquiry');
    Route::get('delete_enquiry/{id}', [EnquiryController::class, 'delete_enquiry'])->name('delete_enquiry');

    Route::get('user_index', [UserController::class, 'all_users'])->name('user_index');
    Route::get('registered_user_index', [UserController::class, 'registered'])->name('registered_user_index');
    Route::get('un_registered_user_index', [UserController::class, 'un_registered'])->name('un_registered_user_index');
    Route::get('edit_user/{id}', [UserController::class, 'edit_user'])->name('edit_user');
    Route::post('update_user', [UserController::class, 'update_user'])->name('update_user');
    Route::get('delete_user', [UserController::class, 'delete_user'])->name('delete_user');
    Route::get('disclaimer/{id}', [UserController::class, 'disclaimer'])->name('disclaimer');

    Route::get('help_and_support', [UserController::class, 'help_and_support'])->name('help_and_support');

});

Route::get('/', function () {
    return view('frontend.home.index');
})->name('index');

Route::post('function', [FormController::class, 'form_submit'])->name('function');


Route::post('store_enquiry', [EnquiryController::class, 'store_enquiry'])->name('store_enquiry');
// forntend links
Route::get('thankyou', function () {
    return view('frontend.thankyou');
})->name('thankyou');
Route::get('future_package', [ServiceController::class, 'future_package'])->name('future_package');
Route::get('equity_package', [ServiceController::class, 'equity_package'])->name('equity_package');
Route::get('option_package', [ServiceController::class, 'option_package'])->name('option_package');
Route::get('index_future_hni_services', [ServiceController::class, 'index_future_hni_services'])->name('index_future_hni_services');
Route::get('sb_premium_packages', [ServiceController::class, 'sb_premium_packages'])->name('sb_premium_packages');
Route::get('hni_packages', [ServiceController::class, 'hni_packages'])->name('hni_packages');
Route::get('ags_trades_package', [ServiceController::class, 'ags_trades_package'])->name('ags_trades_package');


Route::get('about_us', [HomeController::class, 'about_us'])->name('about_us');
Route::get('contact_us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::get('updates', [HomeController::class, 'updates'])->name('updates');
Route::get('contact_us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('payment_option', [HomeController::class, 'payment_option'])->name('payment_option');
Route::get('past_performance', [HomeController::class, 'past_performance'])->name('past_performance');
Route::get('user_agreement', [HomeController::class, 'user_agreement'])->name('user_agreement');
Route::get('invester_charter', [HomeController::class, 'invester_charter'])->name('invester_charter');
Route::get('complaint_data', [HomeController::class, 'complaint_data'])->name('complaint_data');
Route::get('grievance', [HomeController::class, 'grievance'])->name('grievance');
Route::get('terms_and_conditions', [HomeController::class, 'terms_and_conditions'])->name('terms_and_conditions');
Route::resource('blogs', BlogController::class);

Route::get('send_mail', [KycMailController::class, 'index']);
// frontend links
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('admin_future_package', [PackageController::class, 'package'])->name('admin_future_package');
Route::get('admin_equity_package', [PackageController::class, 'package'])->name('admin_equity_package');
Route::get('admin_option_package', [PackageController::class, 'package'])->name('admin_option_package');
Route::get('admin_index_future_hni_services', [PackageController::class, 'package'])->name('admin_index_future_hni_services');
Route::get('admin_sb_premium_packages', [PackageController::class, 'package'])->name('admin_sb_premium_packages');
Route::get('admin_hni_packages', [PackageController::class, 'package'])->name('admin_hni_packages');
Route::get('admin_ags_trades_package', [PackageController::class, 'package'])->name('admin_ags_trades_package');
