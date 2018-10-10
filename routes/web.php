<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('home-post-details/{id}', 'HomeController@homePostDetails')->name('homePostDetails');

Route::get('about', 'AboutUsController@index')->name('about');
Route::get('about-details/{id}', 'AboutUsController@aboutDetails')->name('aboutDetails');

Route::get('blog-post', 'BlogPostController@index')->name('blog');
Route::get('blog-post-details/{id}', 'BlogPostController@detailsPost')->name('detailsBlogPost');

Route::get('financial-planning', 'financialPlanningController@index')->name('financialPlanning');
Route::get('financial-academy', 'financialAcademyController@index')->name('financialAcademy');
Route::get('investment', 'investmentController@index')->name('investment');
Route::post('contactus', 'ContactUsController@contactus')->name('contactus');

Auth::routes();


//Admin route group for Admin..
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']],
    function (){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('abouts', 'AboutUsController');
    Route::resource('homePost','HomePostController');
    Route::resource('blogPost', 'BlogPostController');
    Route::resource('financialAcademy', 'financialAcademyController');
    Route::resource('financialplanning', 'financialPlanningController');
    Route::resource('contactus', 'ContactusController');

    Route::get('social', 'SocialController@index')->name('social');
    Route::put('social-update/{id}', 'SocialController@update')->name('social.update');

    Route::get('homevideo', 'HomevideoController@index')->name('homevideo');
    Route::put('homevideo-update/{id}', 'HomevideoController@update')->name('homevideo.update');

    Route::get('contact', 'ContactController@index')->name('contact');
    Route::put('contact-update/{id}', 'ContactController@update')->name('contact.update');

    Route::get('setting', 'SettingsController@index')->name('setting');
    Route::put('profile-update', 'SettingsController@updateProfile')->name('profile.update');
    Route::put('password-change', 'SettingsController@changePassword')->name('password.change');

});

//Author route group for Author..
Route::group(['as' => 'author.', 'prefix' => 'author', 'namespace' => 'Author', 'middleware' => ['auth', 'author']],
    function (){

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('setting', 'SettingsController@index')->name('setting');
    Route::put('profile-update', 'SettingsController@updateProfile')->name('profile.update');
    Route::put('password-change', 'SettingsController@changePassword')->name('password.change');
});


//Composer define.....
View::composer('layouts.frontend.includes.header', function ($view){
    $socials = App\Social::all();
    $view->with('socials', $socials);
});


