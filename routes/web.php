<?php

use Illuminate\Support\Facades\Route;

//Static Pages
Route::get('/', 'StaticPagesController@home');

Route::get('/about', 'StaticPagesController@about');

Route::get('/menu', 'StaticPagesController@menu');

Route::get('/menu/{slug}', 'StaticPagesController@about');

Route::get('/reservations', 'StaticPagesController@reservations');

Route::post('/reservations', 'StaticPagesController@SaveReservation');

Route::get('/reservations/thank-you', 'StaticPagesController@thankyou');

Route::get('/contact', 'StaticPagesController@contact');

Route::get('/offers', 'StaticPagesController@offers');

Route::get('/offers/thank-you', 'StaticPagesController@ThankYou');

Route::post('/offers', 'StaticPagesController@registerMember');

//Admin Dashboard
Route::get('/admin', 'admin\AdminController@dashboard');


// Admin Users
Route::get('/admin/users', 'admin\UsersController@index');

Route::get('/admin/users/create', 'admin\UsersController@create');

Route::post('/admin/users', 'admin\UsersController@store');

Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');

Route::put('/admin/users/{id}/', 'admin\UsersController@update');

Route::delete('/admin/users/{id}/delete', 'admin\UsersController@delete');


// Admin Food Categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');

Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');

Route::get('/admin/food-categories', 'admin\FoodCategoriesController@store');

Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');

Route::put('/admin/food-categories/{id}/', 'admin\FoodCategoriesController@update');

Route::delete('/admin/food-categories/{id}/delete', 'admin\FoodItemsController@delete');


// Admin Food Items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');

Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');

Route::get('/admin/food-items', 'admin\FoodItemsController@store');

Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');

Route::put('/admin/food-items/{id}/', 'admin\FoodItemsController@update');

Route::delete('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete');

//Admin Customers

//Admin Members
Route::get('/admin/members', 'admin\MemberController@index');

Route::delete('/admin/members/{id}/delete', 'admin\MemberController@delete');



//Admin RSVP
Route::get('/admin/reservations', 'admin\CustomersController@allReservations');



//Admin Authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
