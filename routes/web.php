<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ProjectController;


Route::get('/', function(){
    return view('home');
});
Route::get('/about', function(){
    return view('about');
});
Route::get('/addproduct', [ProductController::class, "create"]);
Route::post('/savedata', [ProductController::class, "store"]);

Route::get('/contact', [EnquiryController::class, "create"]);
Route::post('/enquirydata', [EnquiryController::class, "store"]);
Route::get('/admin/enquiries', [EnquiryController::class, "index"]);
Route::delete("delete_enquiries/{id}",[EnquiryController::class, "destroy"]);
Route::get("edit_enquiry/{id}",[EnquiryController::class, "edit"]);
Route::put("update_enquiry/{id}",[EnquiryController::class, "update"]);
Route::get("/admin/enquiries/search",[EnquiryController::class, "search"]);
Route::get("/admin/viewenquiry/{id}",[EnquiryController::class, "show"]);



Route::get('/project', [ProjectController::class, "create"]);
Route::post('/projectdata', [ProjectController::class, "store"]);