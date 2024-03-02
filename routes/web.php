<?php

use App\Http\Controllers\Admin\AboutUsController;

use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\PictureController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
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
    \Illuminate\Support\Facades\View::composer(['*'],function ($site_data){
        $url =env('APP_URL').":8000";
        $site_data->with([
           '_url'=>$url,
        ]);
    });
Route::get('/',[\App\Http\Controllers\HomeController::class,'index']) ->name('index');
Route::get('news/{id}',[\App\Http\Controllers\HomeController::class,'newsDetail']) ->name('news.detail');
Route::get('item/{id}',[\App\Http\Controllers\HomeController::class,'itemDetail']) ->name('item.detail');
Route::post('order',[\App\Http\Controllers\HomeController::class,'orderForm']) ->name('order.store');
Route::post('feedback',[\App\Http\Controllers\HomeController::class,'feedbackForm']) ->name('feedback.store');



Auth::routes();

Route::group(['middleware'=>['auth']], function() {

    Route::group(['prefix' => 'admin/', 'as' => 'admin.'], function () {
        Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');


        Route::resource('item', ItemController::class);
        Route::resource('order', OrderController::class);
        Route::resource('news', NewsController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('aboutUs', AboutUsController::class);
        Route::resource('picture', PictureController::class);
        Route::resource('video',VideoController::class);
        Route::resource('feedback', FeedbackController::class);

        Route::get('siteSetting', [SiteSettingController::class,'edit'])->name('siteSetting');
        Route::put('siteSetting/update/{id}', [SiteSettingController::class,'update'])->name('siteSetting.update');
        Route::resource('user', UserController::class);
    });

});



