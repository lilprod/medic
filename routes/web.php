<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('connexion');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('inscription', 'Auth\RegisterController@showRegistrationForm')->name('inscription');
Route::post('register', 'Auth\RegisterController@register')->name('register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/', 'PagesController@index')->name('home');

//Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/notre-agence', 'PagesController@about')->name('about');

Route::get('/personnel-medical', 'PagesController@staff')->name('staff');

Route::get('/etablissements', 'PagesController@institution')->name('institution');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::post('contact', 'ContactController@store')->name('postcontact');

Route::post('newsletter','NewsletterController@store');

Route::get('/our-offers', 'PagesController@blog')->name('blog');

//Route::get('post/{slug}', ['as' => 'blog.show', 'uses' => 'PagesController@postDetails']);

//Route::get('category/{slug}', ['as' => 'categoryPosts', 'uses' => 'PagesController@categoryPosts']);

//Route::get('categorie/check_slug', 'CategoryController@check_slug')->name('category.check_slug');

//Route::get('postn/check_slug', 'PostController@check_slug')->name('post.check_slug');

//Route::resource('offers', 'OfferController');

Route::name('admin.')->group(function () {

    Route::group(['prefix' => 'admin'], function () {  

        Route::resource('categories', 'CategoryController');

        Route::resource('administrators', 'UserController');

        Route::resource('roles', 'RoleController');

        Route::resource('permissions', 'PermissionController');

        Route::resource('staffs', 'StaffController');

        Route::resource('institutions', 'InstitutionController');

        Route::resource('specialities', 'SpecialityController');

        Route::resource('offers', 'Controller');

    });
});

Route::get('locale/{locale}', function ($locale) {

	App::setLocale($locale);
    Session::put('locale', $locale);

    return redirect()->back();
});

Route::get('/create_role_permission', function () {
    $role = Role::create(['name' => 'Admin']);
    $permission = Permission::create(['name' => 'Admin Permissions']);
    auth()->user()->assignRole('Admin');
    auth()->user()->givePermissionTo('Admin Permissions');       
});
