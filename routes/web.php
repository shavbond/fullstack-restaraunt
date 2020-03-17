<?php

use Illuminate\Support\Facades\Route;

//Static Pages
Route::get('/', 'StaticPagesController@home');

Route::get('/about', 'StaticPagesController@about');

Route::get('/menu', 'StaticPagesController@menu');

Route::get('/menu/{slug}', 'StaticPagesController@about');

Route::get('/reservations', 'StaticPagesController@reservations');

Route::get('/contact', 'StaticPagesController@contact');


Route::get('/offers', 'StaticPagesController@offers');

//Admin Dashboard
Route::get('/admin', 'admin\AdminController@dashboard');

// Admin Food Categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');

Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');

Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');

// Admin Food Items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');

Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');

Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');

//Admin Customers
Route::get('/admin/offers-members', 'admin\CustomersController@allOffersMembers');

Route::get('/admin/reservations', 'admin\CustomersController@allReservations');



//Admin Authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});



