<?php

use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\Admin\AddPictureComponent;
use App\Http\Livewire\Admin\AdminAddBookComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddContentComponent;
use App\Http\Livewire\Admin\AdminAddContestComponent;
use App\Http\Livewire\Admin\AdminAddEventComponent;
use App\Http\Livewire\Admin\AdminAddHekmatComponent;
use App\Http\Livewire\Admin\AdminAddNewComponent;
use App\Http\Livewire\Admin\AdminAddQuestionComponent;
use App\Http\Livewire\Admin\AdminAddVideoComponent;
use App\Http\Livewire\Admin\AdminCommentsComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminMessagesComponent;
use App\Http\Livewire\Admin\AdminShowContestsComponent;
use App\Http\Livewire\Admin\AdminShowQuestionsComponent;
use App\Http\Livewire\BooksComponent;
use App\Http\Livewire\ConstructionNaveComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\ContestEnterComponent;
use App\Http\Livewire\ContestsComponent;
use App\Http\Livewire\EventsComponent;
use App\Http\Livewire\FahangServicesComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\NewsComponent;
use App\Http\Livewire\OfoghCategoriesComponent;
use App\Http\Livewire\OfoghComponent;
use App\Http\Livewire\OfoghContentComponent;
use App\Http\Livewire\PicturesComponent;
use App\Http\Livewire\QuranAndHadisComponent;
use App\Http\Livewire\ScoreboardComponent;
use App\Http\Livewire\ShowContestComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\VideoesComponent;
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

Route::get('/',HomeComponent::class)->name('home');
Route::get('/about-us',AboutUsComponent::class)->name('about-us');
Route::get('/contact-us',ContactUsComponent::class)->name('contact-us');
Route::get('/ofogh',OfoghComponent::class)->name('ofogh');
Route::get('/ofogh/{id}', OfoghContentComponent::class)->name('ofogh.content');
Route::get('/gallary/pictures' , PicturesComponent::class)->name('pictures');
Route::get('/ofogh/categories/{category_id}',OfoghCategoriesComponent::class)->name('ofogh.categories');
Route::get('/events',EventsComponent::class)->name('events');
Route::get('/videos',VideoesComponent::class)->name('videos');
Route::get('/contests',ContestsComponent::class)->name('contests');
Route::get('/contests/{contest_id}', ShowContestComponent::class)->name('showContest');
Route::get('/contests/{contest_id}/scoreboard',ScoreboardComponent::class)->name('contest.scoreboard');
Route::get('/quranAndHadis',QuranAndHadisComponent::class)->name('quranAndHadis');
Route::get('/FarhangServices', FahangServicesComponent::class)->name('farhangServices');
Route::get('/ConstructionNave', ConstructionNaveComponent::class)->name('constructionNave');
Route::get("/News/{id}", NewsComponent::class)->name('news');
Route::get("/books",BooksComponent::class)->name('books');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


// User Routes
Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});


// Admin Routes
Route::middleware(['auth:sanctum', 'verified' ,'adminAuth'])->group(function(){

    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/addContent',AdminAddContentComponent::class)->name('admin.addContent');
    Route::get('/admin/addPicture',AddPictureComponent::class)->name('admin.addPicture');
    Route::get('/admin/addCategory',AdminAddCategoryComponent::class)->name('admin.addCategory');
    Route::get('/admin/addEvent',AdminAddEventComponent::class)->name('admin.addEvent');
    Route::get('/admin/addVideo',AdminAddVideoComponent::class)->name('admin.addVideo');
    Route::get('/admin/AddHekmat', AdminAddHekmatComponent::class)->name('admin.addHekmat');
    Route::get('/admin/comments',AdminCommentsComponent::class)->name('admin.comments');
    Route::get('/admin/messages',AdminMessagesComponent::class)->name('admin.messages');
    Route::get('/admin/addContest', AdminAddContestComponent::class)->name("admin.addContest");
    Route::get('/admin/showContests',AdminShowContestsComponent::class)->name('admin.showContests');
    Route::get('/admin/contests/{id}/addQuestion' , AdminAddQuestionComponent::class)->name('admin.addQuestion');
    Route::get('/admin/contests/{id}/showQuestions',AdminShowQuestionsComponent::class)->name('admin.showQuestion');
    Route::get('/admin/addNews', AdminAddNewComponent::class)->name('admin.addNews');
    Route::get('/admin/addBook', AdminAddBookComponent::class)->name('admin.addBook');

});

// enter Contest Route
Route::middleware(['auth:sanctum' , 'verified' , 'LoginContest'])->group(function(){
    Route::get('/contests/{contest_id}/enter',ContestEnterComponent::class)->name('contest.enter');
});
