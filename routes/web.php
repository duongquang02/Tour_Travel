<?php

use Illuminate\Support\Facades\Route;
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

    Route::get('/', function () {
        return view('home.home');
    })->name('/');

    Route::get('/aboutus', function () {
        return view('pages.pages',['page'=>'aboutus']);})->name('aboutus');

        Route::get('/details/{Tid}', function ($Tid) {
            return view('package.detail.detail', ['Tid' => $Tid]);
        })->name('details');

    Route::get('/contact', function () {
        return view('pages.pages',['page'=>'aboutus']);})->name('contact');

    Route::get('/term', function () {
        return view('pages.pages',['page'=>'term']);})->name('term');

    Route::get('/privacy', function () {
        return view('pages.pages',['page'=>'privacy']);})->name('privacy');

    Route::get('/list_tour', function () {
        return view('package.list.list');})->name('list_tour');

    Route::get('/enquiry', function () {
        return view('enquiry.enquiry');})->name('enquiry');
    Route::post('/signin', 'App\Http\Controllers\UsersController@signIn')->name('signin');
    Route::post('/signup', 'App\Http\Controllers\UsersController@signUp')->name('signup');
    Route::get('/thanks', function () {
        return view('thanks.thanks');})->name('thanks');
Route::get('/logout', 'App\Http\Controllers\UsersController@logout')->name('logout');
Route::get('/profile', function () {
    return view('profile.profile');})->name('profile');
Route::get('/change_password', function () {
    return view('change_pw.cpassword');})->name('change_password');
    Route::get('/tour_history', function () {
        return view('tour_history.tour_history');})->name('tour_history');


Route::post('/update_profile', 'App\Http\Controllers\UsersController@update')->name('update_profile');
Route::post('/change-password', 'App\Http\Controllers\UsersController@changePassword')->name('change-password');
Route::post('/booking/{Tid}', 'App\Http\Controllers\UsersController@__booking')->name('booking');
Route::post('/cancel_booking/{BTid}', 'App\Http\Controllers\UsersController@__booking')->name('cancel_booking');
Route::get('/ticket.issue_tickets', 'App\Http\Controllers\UsersController@issueTickets')->name('issue_tickets');
// Route::get('/issue_tickets', function () {
//     return view('ticket.issue_tickets');})->name('issue_tickets');
// admin

Route::get('/admin/login', 'App\Http\Controllers\AdminController@login')->name('admin.login');
Route::post('/admin/login', 'App\Http\Controllers\AdminController@postLogin')->name('admin.postLogin');
Route::get('/admin/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('admin.dashboard');
Route::get('/admin/tours_create', 'App\Http\Controllers\AdminController@create_tours')->name('admin.tours_create');
Route::get('/admin/manages/tours',function(){
    return view('admin.manages.manages_tours');
})->name('admin.manage.tours');
Route::post('/create-package', 'App\Http\Controllers\AdminController@store');

