<?php

use App\Http\Controllers\ControlPanel\BlogController;
use App\Http\Controllers\ControlPanel\ClientController;
use App\Http\Controllers\ControlPanel\ContactController as ControlPanelContactController;
use App\Http\Controllers\ControlPanel\DashboardController;
use App\Http\Controllers\ControlPanel\OrderController as ControlPanelOrderController;
use App\Http\Controllers\ControlPanel\PageController;
use App\Http\Controllers\ControlPanel\PhotoAlbumController;
use App\Http\Controllers\ControlPanel\PlanController;
use App\Http\Controllers\ControlPanel\ProjectController;
use App\Http\Controllers\ControlPanel\SubServiceController;
use App\Http\Controllers\ControlPanel\TeamController;
use App\Http\Controllers\ControlPanel\UserController;
use App\Http\Controllers\ControlPanel\SliderController;
use App\Http\Controllers\ControlPanel\VedioAlbumController;
use App\Http\Controllers\ControlPanel\WebsitController;
use App\Http\Controllers\ControlPanel\TestimonialController;
use App\Http\Controllers\ControlPanel\AboutUsController;
use App\Http\Controllers\ControlPanel\ProjectStationController;
use App\Http\Controllers\Front\HomePageController;
use App\Http\Controllers\Front\ContactController;
use App\Models\about_us;
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

// Route::get('/', function () {
//     return view('frontend.index');
// });




// Route::get('/dashbourd', function () {
//     dd('hello');
//     return view('control-panel.dashboard');
// });

// Control Panel Routs
Route::middleware('auth')
        ->prefix('control-panel')
        ->group(function () {
            Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

            Route::get('users', [UserController::class, 'index'])->name('all-users');
            Route::get('users/create', [UserController::class, 'create'])->name('create-users');
            Route::post('users/create', [UserController::class, 'store'])->name('store-users');
            Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('edit-users');
            Route::put('users/{user}', [UserController::class, 'update'])->name('update-users');
            Route::delete('users', [UserController::class, 'destroy'])->name('delete-users');

            Route::get('setting/website-setting', [WebsitController::class, 'edit'])->name('setting-website-edit');
            Route::post('setting/website-setting', [WebsitController::class, 'update'])->name('setting-website-update');

            Route::resource('services', App\Http\Controllers\ControlPanel\ServiceController::class);
            Route::resource('subservices', SubServiceController::class);
            Route::resource('clients', ClientController::class);
            Route::resource('projects', ProjectController::class);
            Route::resource('pages', PageController::class);
            Route::resource('blogs', BlogController::class);
            Route::resource('teams', TeamController::class);
            Route::resource('orders', ControlPanelOrderController::class);
            Route::get('contacts',[ControlPanelContactController::class,'index'])->name('contacts.index');
            Route::get('contacts/{contact}',[ControlPanelContactController::class,'show'])->name('contacts.show');
            Route::delete('contacts/{contact}',[ControlPanelContactController::class,'destroy'])->name('contacts.destroy');
            Route::resource('sliders', SliderController::class);

            Route::resource('photo-album',PhotoAlbumController::class);
            Route::put('photo-album/{photo_album}/photos',[PhotoAlbumController::class,'updatePhotos'])->name('photo-album.updatePhotos');
            Route::resource('vedio-album',VedioAlbumController::class);

            Route::get('plans/{service}',[PlanController::class,'show'])->name('plans.show');
            Route::get('plans/create/{service}',[PlanController::class,'create'])->name('plans.create');
            Route::post('plans/create',[PlanController::class,'store'])->name('plans.store');
            Route::get('plans/{plan}/edit',[PlanController::class,'edit'])->name('plans.edit');
            Route::put('plans/{plan}/edit',[PlanController::class,'update'])->name('plans.update');
            Route::delete('plans/{plan}',[PlanController::class,'destroy'])->name('plans.destroy');


            Route::get('testimonial', [TestimonialController::class, 'index'])->name('all-testimonial');
            Route::get('testimonial/create', [TestimonialController::class, 'create'])->name('create-testimonial');
            Route::post('testimonial/create', [TestimonialController::class, 'store'])->name('store-testimonial');
            Route::get('testimonial/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('edit-testimonial');
            Route::post('testimonial/{testimonial}', [TestimonialController::class, 'update'])->name('update-testimonial');
            Route::delete('testimonial/{testimonial}', [TestimonialController::class, 'destroy'])->name('delete-testimonial');

            Route::get('about_us', [AboutUsController::class, 'index'])->name('all-about_us');
            Route::get('about_us/create', [AboutUsController::class, 'create'])->name('create-about_us');
            Route::post('about_us/create', [AboutUsController::class, 'store'])->name('store-about_us');
            Route::get('about_us/{about_us}/edit', [AboutUsController::class, 'edit'])->name('edit-about_us');
            Route::post('about_us/{about_us}', [AboutUsController::class, 'update'])->name('update-about_us');
            Route::delete('about_us/{about_us}', [AboutUsController::class, 'destroy'])->name('delete-about_us');

            Route::get('project_station', [ProjectStationController::class, 'index'])->name('all-project_station');
            Route::get('project_station/create', [ProjectStationController::class, 'create'])->name('create-project_station');
            Route::post('project_station/create', [ProjectStationController::class, 'store'])->name('store-project_station');
            Route::get('project_station/{project_station}/edit', [ProjectStationController::class, 'edit'])->name('edit-project_station');
            Route::post('project_station/{project_station}', [ProjectStationController::class, 'update'])->name('update-project_station');
            Route::delete('project_station/{project_station}', [ProjectStationController::class, 'destroy'])->name('delete-project_station');

        });
//            start front end

Route::get('/', [HomePageController::class, 'index'])->name('front.show');
Route::post('Client/Contact', [ContactController::class, 'store'])->name('client.contact');
Route::get('/AboutUs', [HomePageController::class, 'about'])->name('front.about.us');
Route::get('/Team/Member', [HomePageController::class, 'team'])->name('front.team.member');
Route::get('/Category/{service}', [HomePageController::class, 'services'])->name('front.services');
Route::get('/Project/{project}', [HomePageController::class, 'project'])->name('front.project');



require __DIR__.'/auth.php';
