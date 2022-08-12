<?php

use App\Http\Controllers\AdsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BergainController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\BazarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return redirect('dashboard');
});

Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('login-post',[AuthController::class,'loginPost'])->name('login-post');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::get('register-post',[AuthController::class,'registerPost'])->name('register-post');
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('dashboard-batak',[DashboardController::class,'bahasaBatak'])->name('dashboard-batak');

Route::post('product/search',[ProductController::class,'search'])->name('search');
Route::get('product/view/{id}',[ProductController::class,'view'])->name('view');

Route::get('faq',[FaqController::class,'index'])->name('faq');
Route::get('faq/show',[FaqController::class,'show'])->name('faq.show');


Route::group(['middleware'=>'auth'],function(){
    Route::group(['middleware'=>'authorization:1,2,3'],function(){

    });
    Route::group(['middleware'=>'authorization:3,2'],function(){
        Route::get('user/profile',[UserController::class,'index'])->name('user.profile');
        Route::get('user/seller-registration',[UserController::class,'sellerRegistration'])->name('user.seller-registration');
        Route::get('user/account-setting',[UserController::class,'accountSetting'])->name('user.account-setting');


        Route::get('seller-registration',[AuthController::class,'registerSeller'])->name('registerSeller');
        Route::post('seller-registration-post',[AuthController::class,'registerSellerPost'])->name('registerSellerPost');

        Route::post('cart/add-post',[CartController::class,'addToCart'])->name('addToCart');
        Route::get('cart',[CartController::class,'index'])->name('cart');
        Route::post('cart/checkout',[CartController::class,'checkout'])->name('checkout');
        Route::get('order',[OrderController::class,'index'])->name('order');
        Route::get('order/form',[OrderController::class,'orderForm'])->name('order.form');
        Route::get('order/detail/{id}',[OrderController::class,'show'])->name('order.detail');
        Route::get('order/rating/{id}',[OrderController::class,'rating'])->name('order.rating');
        Route::get('order/send-rating/{id}',[OrderController::class,'sendRating'])->name('order.send-rating');
        Route::get('order/cancel',[OrderController::class,'cancel'])->name('order.cancel');

        Route::get('bazar',[BazarController::class,'index'])->name('bazar');
        Route::get('bazar/detail',[BazarController::class,'show'])->name('bazar.detail');

        Route::get('auction',[AuctionController::class,'katalog'])->name('auction');
        Route::get('auction/detail/{id}',[AuctionController::class,'detail'])->name('auction.detail');
        Route::post('auction/detail-post',[AuctionController::class,'bid'])->name('auction.detail-post');

        Route::get('lelang',[AuctionController::class,'lelang'])->name('lelang');
        Route::post('lelangPost',[AuctionController::class,'lelangPost'])->name('lelangPost');




        Route::post('bergain',[BergainController::class,'bergain'])->name('bergain');
        Route::post('bergain-post',[BergainController::class,'bergainPost'])->name('bergain-post');
        Route::post('rebergain',[BergainController::class,'rebergain'])->name('rebergain');
        Route::get('bergain/cancel/{id}',[BergainController::class,'cancelBergain'])->name('rcancelBergain');


    });


    Route::group(['middleware'=>'authorization:1'],function(){
        Route::get('user/membership',[UserController::class,'membership'])->name('user.membership');
        Route::get('user/confirm-member-registration/{id}',[UserController::class,'confirmMemberRegistration'])->name('user.confirm-member-registration');

        Route::get('manage-user',[UserController::class,'manageUser'])->name('manage-user');

        Route::get('manage-ads',[AdsController::class,'index'])->name('manage-ads');
        Route::get('add-ads',[AdsController::class,'add'])->name('manage-ads.add');

        Route::get('manageLelang',[AuctionController::class,'manageLelang'])->name('manageLelang');
        Route::post('buatLelangPost',[AuctionController::class,'buatLelangPost'])->name('buatLelangPost');
        Route::get('detailLelang',[AuctionController::class,'detailLelang'])->name('detailLelang');

        Route::get('manage-faq',[FaqController::class,'manageFaq'])->name('manage-faq');

        Route::get('add-bazar',[BazarController::class,'add'])->name('manage-bazar.add');
        Route::get('manage-bazar',[BazarController::class,'manageBazar'])->name('manage-bazar');


    });
    Route::group(['middleware'=>'authorization:2'],function(){

    });
    Route::group(['middleware'=>'authorization:3'],function(){
        Route::get('store',[StoreController::class,'index'])->name('store');
        Route::get('store/monitoring',[StoreController::class,'monitoring'])->name('store.monitoring');
        Route::get('store/product',[ProductController::class,'index'])->name('product');
        Route::get('store/product/add',[ProductController::class,'add'])->name('product.add');
        Route::post('store/product/add-new',[ProductController::class,'addNew'])->name('product.add-new');
        Route::post('store/product/add-post',[ProductController::class,'addPost'])->name('product.add-post');

        Route::get('store/order',[OrderController::class,'storeOrder'])->name('store.order');
        Route::get('store/order/cancelled',[OrderController::class,'cancelledOrder'])->name('order.cancelled');
        Route::get('store/order/detail/{id}',[OrderController::class,'storeOrderDetail'])->name('store.orderDetail');
        Route::get('bergain/approve/{id}',[BergainController::class,'bergainApprove'])->name('bergain.reject');
        Route::get('bergain/reject/{id}',[BergainController::class,'bergainReject'])->name('bergain.approve');

        Route::get('store/shipment',[ShipmentController::class,'index'])->name('shipment');
        Route::get('store/shipment/setting',[ShipmentController::class,'setting'])->name('shipment.setting');

        Route::get('store/payment/saldo',[PaymentController::class,'index'])->name('payment.saldo');
        Route::get('store/payment/setting',[PaymentController::class,'paymentSetting'])->name('payment.setting');
        Route::get('store/payment/add-credit-card',[PaymentController::class,'addCreditCard'])->name('payment.add-credit-card');


        Route::get('store/auction',[AuctionController::class,'index'])->name('store.auction');
        Route::get('store/auction/add',[AuctionController::class,'create'])->name('store.auction.add');
        Route::post('store/auction/add-post',[AuctionController::class,'createPost'])->name('store.auction.add-post');
        Route::get('store/auction/detail',[AuctionController::class,'show'])->name('store.auction.detail');
        Route::get('store/auction/detail-closed',[AuctionController::class,'showClosedAuction'])->name('store.auction.detail-closed');
    });

});
