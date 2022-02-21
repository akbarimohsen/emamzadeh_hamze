<?php

use App\Http\Controllers\PaymentController;
use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\Admin\AddCourseComponent;
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
use App\Http\Livewire\Admin\AdminEditContentComponent;
use App\Http\Livewire\Admin\AdminMessagesComponent;
use App\Http\Livewire\Admin\AdminShowContestsComponent;
use App\Http\Livewire\Admin\AdminShowQuestionsComponent;
use App\Http\Livewire\Admin\AdminUsersComponent;
use App\Http\Livewire\Admin\AdminUsersInContestComponent;
use App\Http\Livewire\Admin\ShowCoursesComponent;
use App\Http\Livewire\BooksComponent;
use App\Http\Livewire\ConstructionNaveComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\ContestEnterComponent;
use App\Http\Livewire\ContestsComponent;
use App\Http\Livewire\Education\AddHeadingComponent;
use App\Http\Livewire\Education\AddLessonComponent;
use App\Http\Livewire\Education\AddQuestionComponent;
use App\Http\Livewire\Education\AddQuizComponent;
use App\Http\Livewire\Education\Cart\Cart1Component;
use App\Http\Livewire\Education\Cart\Cart2Component;
use App\Http\Livewire\Education\Cart\Cart3Component;
use App\Http\Livewire\Education\CourseComponent;
use App\Http\Livewire\Education\EditHeadingComponent;
use App\Http\Livewire\Education\Error404Component;
use App\Http\Livewire\Education\HomeComponent as EducationHomeComponent;
use App\Http\Livewire\Education\LessonComponent;
use App\Http\Livewire\Education\Quiz\QuizComponent;
use App\Http\Livewire\Education\Quiz\QuizDetailComponent;
use App\Http\Livewire\Education\ShowQuestionsComponent;
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
use App\Http\Livewire\SpeechesShowComponent;
use App\Http\Livewire\User\CommentsComponent;
use App\Http\Livewire\User\MyCoursesComponent;
use App\Http\Livewire\User\OrderDetailComponent;
use App\Http\Livewire\User\OrdersComponent;
use App\Http\Livewire\User\PhoneAuthenticationComponent;
use App\Http\Livewire\User\RegisterServentComponent;
use App\Http\Livewire\User\Teacher\ShowCoursesComponent as TeacherShowCoursesComponent;
use App\Http\Livewire\User\UserContestComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\VideoesComponent;
use App\Http\Livewire\VideoPageComponent;
use Illuminate\Support\Facades\Route;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

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
Route::get('/speeches/{day}', SpeechesShowComponent::class)->name('speeches.show');
Route::get('/events',EventsComponent::class)->name('events');
Route::get('/videos',VideoesComponent::class)->name('videos');
Route::get('/videos/{id}',VideoPageComponent::class)->name('video.show');
Route::get('/contests',ContestsComponent::class)->name('contests');
Route::get('/contests/{contest_id}', ShowContestComponent::class)->name('showContest');
Route::get('/contests/{contest_id}/scoreboard',ScoreboardComponent::class)->name('contest.scoreboard');
Route::get('/quranAndHadis',QuranAndHadisComponent::class)->name('quranAndHadis');
Route::get('/FarhangServices', FahangServicesComponent::class)->name('farhangServices');
Route::get('/ConstructionNave', ConstructionNaveComponent::class)->name('constructionNave');
Route::get("/News/{id}", NewsComponent::class)->name('news');
Route::get("/books",BooksComponent::class)->name('books');

# education routes
Route::get('/education/error404', Error404Component::class)->name('education.error404');
Route::get('/education', EducationHomeComponent::class)->name('education.home');
Route::get('/education/course/{id}', CourseComponent::class)->name('education.showcourse');

#


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


// Lesson and Quiz Routes
Route::middleware(['auth:sanctum', 'verified' , 'LessonLogin'])->group(function(){
    Route::get('/education/courses/{id1}/heading/{id2}/lesson/{id3}', LessonComponent::class)->name('education.lesson');
    Route::get('/education/courses/{id1}/heading/{id2}/quiz/{id3}', QuizDetailComponent::class)->name('education.quizDetail');
    Route::get('/education/courses/{id1}/heading/{id2}/quiz/{id3}/enter', QuizComponent::class)->name('education.quiz.enter')->middleware('QuizLogin');

});

// User Routes
Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/phoneAuthentication', PhoneAuthenticationComponent::class)->name('user.phoneAuthentication');
    Route::get('/user/contests', UserContestComponent::class)->name('user.contests');
    Route::get('/user/registerServant',RegisterServentComponent::class)->name('user.register_servant');
    // my courses
    Route::get('/user/mycourses', MyCoursesComponent::class)->name('user.myCourses');


    //orders
    Route::get('/user/orders', OrdersComponent::class)->name('user.orders');
    Route::get('/user/order/{id}', OrderDetailComponent::class)->name('user.order');
    // education cart1
    Route::get('/user/order/{id}/cart', Cart1Component::class)->name('user.order.cart');
    Route::get('/user/order/{id}/pay', Cart2Component::class)->name('user.order.pay');
    Route::get('/user/order/{id}/end', Cart3Component::class)->name('user.order.end');
    Route::post('/user/order/{id}/purchase', [PaymentController::class , 'purchase'])->name('user.order.purchase');
});

// Teacher Routes
Route::middleware(['auth:sanctum', 'verified','TeacherAuth'])->group(function(){

    Route::get('/teacher/{id}/courses', TeacherShowCoursesComponent::class )->name('teacher.courses');
    Route::get('/education/courses/{id}/addHeading', AddHeadingComponent::class)->name('education.addHeading');
    Route::get('/education/courses/{id1}/heading/{id2}/addLesson', AddLessonComponent::class)->name('education.addCourse');
    Route::get('/education/courses/{id1}/heading/{id2}/editHeading', EditHeadingComponent::class)->name('education.editHeading');
    Route::get('/education/courses/{id1}/heading/{id2}/addQuiz', AddQuizComponent::class)->name('education.addQuiz');
    Route::get('/education/courses/{id1}/heading/{id2}/quiz/{id3}/addQuestion', AddQuestionComponent::class)->name('quiz.addquestion');
    Route::get('/education/courses/{id1}/heading/{id2}/quiz/{id3}/showQuestions', ShowQuestionsComponent::class)->name('quiz.showQuestions');
    Route::get('/teacher/{id}/comments', CommentsComponent::class)->name('teacher.comments');
});

// Admin Routes
Route::middleware(['auth:sanctum', 'verified' ,'adminAuth'])->group(function(){

    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/addContent',AdminAddContentComponent::class)->name('admin.addContent');
    Route::get('/admin/contents/{id}/edit',AdminEditContentComponent::class)->name('admin.editContent');
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
    Route::get('/admin/contests/{id}/users',AdminUsersInContestComponent::class)->name('admin.contest_users');
    Route::get('/admin/addNews', AdminAddNewComponent::class)->name('admin.addNews');
    Route::get('/admin/addBook', AdminAddBookComponent::class)->name('admin.addBook');
    Route::get('/admin/users',AdminUsersComponent::class)->name('admin.showUsers');
    Route::get('/admin/addCourses',AddCourseComponent::class)->name('admin.addCourse');
    Route::get("/admin/showCourses", ShowCoursesComponent::class)->name('admin.showCourses');

});

// enter Contest Route
Route::middleware(['auth:sanctum' , 'verified' , 'LoginContest'])->group(function(){
    Route::get('/contests/{contest_id}/enter',ContestEnterComponent::class)->name('contest.enter');
});
