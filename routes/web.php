<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DostiBDController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderPlacementController;
use App\Http\Controllers\ViewProductDetailsController;
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

// Route::group(['middleware'=>"web"],function()
    // Route::get('/', function () {
    //     return view('welcome')->name('welcome');
    // });
    Route ::get('/',[DostiBDController::class,'welcome'])->name('welcome');
    Route ::get('/about',[DostiBDController::class,'about'])->name('about');
    Route ::get('/shelf',[DostiBDController::class,'shelf'])->name('shelf');
    Route ::get('/policies',[DostiBDController::class,'policies'])->name('policies');
    Route ::get('/contact',[DostiBDController::class,'contact'])->name('contact');
    Route ::get('/password',[DostiBDController::class,'password'])->name('password');


    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/category/add',[AdminController::class,'index'])->name('category.add');
    Route:: post('/category/productValueRec',[AdminController::class,'productValueRec'])->name('category.productValueRec');
    Route::get('/category/manage',[AdminController::class,'manage'])->name('category.manage');

    Route::get('/product/manageProduct',[AdminController::class,'manageProduct'])->name('product.manageProduct');
    Route::post('/product/productDetailsRec',[AdminController::class,'productDetailsRec'])->name('productDetailsRec');
    Route::get('/product/showProductList',[AdminController::class,'showProductList'])->name('showProductList');

//   backend

    Route ::post('/donation/recDonation',[DonationController::class,'recDonation'])->name('donation.recDonation');  
    Route::get('/donation/manageDonation',[DonationController::class,'manageDonation'])->name('donation.manageDonation');
    
    Route :: get('/delete/donation{id}', [DonationController ::class, 'delete'])->name('delete');
    Route :: get('/edit/donation{id}', [DonationController ::class, 'editDonation'])->name('editDonation');
    Route:: post('/UpdateDonation{id}', [DonationController ::class, 'UpdateDonation'])->name('UpdateDonation');


    
    Route ::get('/admin/viewProductDetail{id}',[ViewProductDetailsController ::class,'viewIDwiseProduct'])->name('viewIDwiseProduct');
    Route :: get('/delete/product{id}', [ViewProductDetailsController ::class, 'deleteProduct'])->name('deleteProduct');
    Route :: get('/edit/product{id}', [ViewProductDetailsController ::class, 'editProduct'])->name('editProduct');
    Route:: post('/Update/Product{id}', [ViewProductDetailsController ::class, 'UpdateProduct'])->name('UpdateProduct');

    Route ::get('/admin/orderDetails',[AdminController ::class,'orderDetails'])->name('admin.orderDetails');
    Route :: get('/delete/deleteOrder{id}', [AdminController ::class, 'deleteOrder'])->name('deleteOrder');
    Route :: get('/delete/acceptOrder{id}', [AdminController ::class, 'acceptOrder'])->name('acceptOrder');
    // frontend
    Route ::get('/category/donate',[ViewProductDetailsController::class,'categoryDonate'])->name('categoryDonate');  
    Route ::get('/category/shoes',[ViewProductDetailsController::class,'categoryShoes'])->name('categoryShoes');
    Route ::get('/category/pant',[ViewProductDetailsController::class,'categoryPant'])->name('categoryPant');
    Route ::get('/category/tshirt',[ViewProductDetailsController::class,'categoryTshirt'])->name('categoryTshirt');
    Route ::get('/category/cloth',[ViewProductDetailsController::class,'categoryCloth'])->name('categoryCloth');
    Route ::get('/product/details{id}',[ViewProductDetailsController::class,'productDetails'])->name('productDetails');
    Route ::get('/product/new',[ViewProductDetailsController::class,'newProduct'])->name('newProduct');
    
    Route ::post('/contact/sendMsg',[ContactUsController::class,'sendMsg'])->name('contact.sendMsg');
    Route ::get('/search',[DostiBDController::class,'search'])->name('search');
    Route ::get('/admin/login',[AdminController::class,'adminLogin'])->name('admin.login');
    Route ::post('/admin/login',[AdminController::class,'adminLoginPost'])->name('admin.login');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route ::get('/home',[DostiBDController::class,'index'])->name('home');
   
    Route ::get('/myprofile',[DostiBDController::class,'myAcount'])->name('myAcount');
    Route ::get('/cart',[DostiBDController::class,'cart'])->name('cart');
    Route :: get('/delete/Cart{id}', [DostiBDController ::class, 'deleteCart'])->name('deleteCart');
    Route ::get('/order',[OrderController::class,'order'])->name('order');
   Route::post('/orderPost',[OrderController::class,'orderPost'])->name('orderPost');

   







    
    
});
