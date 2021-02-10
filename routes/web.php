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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/', 'PagesController@index')->name('home');

//Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('home');

Route::get('/about-us', 'PagesController@about')->name('about');

Route::get('/contact-us', 'PagesController@contact')->name('contact');

Route::post('contact', 'ContactController@store')->name('postcontact');

Route::post('newsletter','NewsletterController@store');

Route::get('/our-offers', 'PagesController@blog')->name('blog');

//Route::get('post/{slug}', ['as' => 'blog.show', 'uses' => 'PagesController@postDetails']);

//Route::get('category/{slug}', ['as' => 'categoryPosts', 'uses' => 'PagesController@categoryPosts']);

//Route::get('categorie/check_slug', 'CategoryController@check_slug')->name('category.check_slug');

//Route::get('postn/check_slug', 'PostController@check_slug')->name('post.check_slug');

//Route::resource('offers', 'OfferController');

Route::resource('categories', 'CategoryController');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::get('locale/{locale}', function ($locale) {

	App::setLocale($locale);
    Session::put('locale', $locale);

    return redirect()->back();
});

/*Route::get('/create_role_permission', function () {
    $role = Role::create(['name' => 'Admin']);
    $permission = Permission::create(['name' => 'Admin Permissions']);
    auth()->user()->assignRole('Admin');
    auth()->user()->givePermissionTo('Admin Permissions');       
});*/
