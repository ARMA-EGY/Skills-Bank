<?php

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


/*
|--------------------------------------------------------------------------
| Front Routes 
|--------------------------------------------------------------------------
*/

Route::get('/landing/{urlSuffix}', 'FrontController@landing')->name('landing');
Route::post('/landingmessage', 'FrontController@landingMessage')->name('landing.message');

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::get('/', 'FrontController@index')->name('welcome');
    Route::get('/about', 'FrontController@about')->name('about');
    Route::get('/team', 'FrontController@team')->name('team');
    Route::get('/clients', 'FrontController@clients')->name('clients');
    Route::get('/learningApproach', 'FrontController@learningApproach')->name('learningApproach');
    Route::get('/learningTree', 'FrontController@learningTree')->name('learningTree');
    Route::get('/workshop', 'FrontController@workshop')->name('workshop');
    Route::get('/calendar', 'FrontController@calendar')->name('public.calendar');
    Route::get('/collaborations', 'FrontController@collaborations')->name('collaborations');
    Route::get('/blogs', 'FrontController@blogs')->name('blogs');
    Route::get('/careers', 'FrontController@careers')->name('careers');
    Route::get('/reachout', 'FrontController@reachout')->name('reachout');
    Route::get('/Solutions/Practical', 'FrontController@practical')->name('practical');
    Route::get('/Solutions/Virtual', 'FrontController@virtual')->name('virtual');
    Route::get('/Solutions/Videos', 'FrontController@videos')->name('videos');
    Route::get('/Solutions/Designing', 'FrontController@designing')->name('designing');
    Route::get('/Solutions/Assessments', 'FrontController@assessments')->name('assessments');
    Route::get('/course/{id}', 'FrontController@courseShow')->name('course.show');
    Route::get('/blog/{url}', 'FrontController@blogShow')->name('blog.show');
    Route::get('/collab/{url}', 'FrontController@collabShow')->name('collab.show');
    Route::get('/member/{id}', 'FrontController@memberShow')->name('member.show');

    Route::post('/booking', 'FrontController@booking')->name('booking');
    Route::post('/message', 'FrontController@message')->name('message');
    Route::post('/subscribe', 'FrontController@subscribe')->name('subscribe');
    Route::post('/careerrequest', 'FrontController@careerrequest')->name('career-request');

    Route::post('/processedcallback', 'FrontController@processedCallback');
    Route::get('/responsecallback', 'FrontController@responseCallback');
    Route::get('/payment', 'FrontController@payment')->name('payment');
});

Route::get('/admin', function () {return redirect('/login');});

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

/*
|--------------------------------------------------------------------------
| Roles Routes 
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function () 
{

    Route::get('/home', 'MasterController@index')->name('home');
    Route::get('/profile', 'MasterController@profile')->name('profile');
    /*
    |--------------------------------------------------------------------------
    | Admin Routes 
    |--------------------------------------------------------------------------
    */

    Route::group(['prefix' => 'admin','middleware' => [ 'admin' ]], function () 
    {
        
        Route::get('/landing', 'MasterController@landing')->name('admin.landing');
        Route::post('/getlanding', 'MasterController@getlanding')->name('getlanding');
        Route::post('/editlanding', 'MasterController@editlanding')->name('editlanding');
        Route::get('/editlanding2/{id}', 'MasterController@editlanding2')->name('edit-landing');
        Route::post('/updatelanding', 'MasterController@updatelanding')->name('updatelanding');

        Route::get('/calendar', 'MasterController@calendar')->name('calendar');
        
        /*
        |--------------------------------------------------------------------------
        | Staff
        |--------------------------------------------------------------------------
        */        
        Route::resource('/staff', 'Admin\Staff\StaffController'); 
        Route::get('/activestaff', 'Admin\Staff\StaffController@active')->name('active-staff');
        Route::get('/deactivestaff', 'Admin\Staff\StaffController@deactive')->name('deactive-staff');
        Route::get('/staff/{id}/profile', 'Admin\Staff\StaffController@profile')->name('staff.profile');
        Route::post('/disablestaff', 'Admin\Staff\StaffController@disable')->name('staff-disable');


        /*
        |--------------------------------------------------------------------------
        | Courses
        |--------------------------------------------------------------------------
        */
        Route::resource('/courses', 'Admin\Courses\CoursesController'); 
        Route::post('/disablecourse', 'Admin\Courses\CoursesController@disable')->name('course-disable');
        Route::get('/course/requestes', 'Admin\Courses\CoursesController@requestes')->name('course-requestes');
        Route::post('/courserequestaccept', 'Admin\Courses\CoursesController@accept')->name('course-request-accept');
        Route::post('/topMonth', 'Admin\Courses\CoursesController@topMonth')->name('course-top');

        /*
        |--------------------------------------------------------------------------
        | Courses Category
        |--------------------------------------------------------------------------
        */
        Route::resource('/coursecategory', 'Admin\Courses\CoursesCategoryController');
        Route::post('/disablecoursecategory', 'Admin\Courses\CoursesCategoryController@disable')->name('course-category-disable');
        Route::get('/activecoursecategory', 'Admin\Courses\CoursesCategoryController@active')->name('active-course-category');
        Route::get('/deactivecoursecategory', 'Admin\Courses\CoursesCategoryController@deactive')->name('deactive-course-category');


        /*
        |--------------------------------------------------------------------------
        | Team
        |--------------------------------------------------------------------------
        */
        Route::resource('/team', 'Admin\Team\TeamController'); 
        Route::post('/removeteam', 'Admin\Team\TeamController@removeteam')->name('remove-team');


        /*
        |--------------------------------------------------------------------------
        | Clients
        |--------------------------------------------------------------------------
        */
        Route::resource('/clients', 'Admin\Clients\ClientsController'); 
        Route::post('/removeclients', 'Admin\Clients\ClientsController@removeclients')->name('remove-clients');

        Route::resource('/clientscategory', 'Admin\Clients\ClientsCategoryController');
        Route::post('/disableclientcategory', 'Admin\Clients\ClientsCategoryController@disable')->name('client-category-disable');


        /*
        |--------------------------------------------------------------------------
        | testimonials
        |--------------------------------------------------------------------------
        */
        Route::resource('/testimonials', 'Admin\Testimonials\TestimonialsController'); 
        Route::post('/removetestimonials', 'Admin\Testimonials\TestimonialsController@removetestimonials')->name('remove-testimonials');


        /*
        |--------------------------------------------------------------------------
        | Blogs
        |--------------------------------------------------------------------------
        */        
        Route::get('/drafts', 'Admin\Blogs\BlogsController@draft')->name('admin-draft');
        Route::resource('/blogs', 'Admin\Blogs\BlogsController'); 
        Route::resource('/categories', 'Admin\Blogs\CategoriesController');
        Route::resource('/tags', 'Admin\Blogs\TagsController'); 
        Route::post('/removecategory', 'Admin\Blogs\CategoriesController@removecategory')->name('remove-category');
        Route::post('/removetag', 'Admin\Blogs\TagsController@removetag')->name('remove-tag');
        Route::post('/removeblog', 'Admin\Blogs\BlogsController@removeblog')->name('remove-blog');


        /*
        |--------------------------------------------------------------------------
        | Collaboration
        |--------------------------------------------------------------------------
        */        
        Route::get('/collaborationdrafts', 'Admin\Collaboration\CollaborationController@draft')->name('collaboration-admin-draft');
        Route::resource('/collaboration', 'Admin\Collaboration\CollaborationController'); 
        Route::resource('/collaborationcategories', 'Admin\Collaboration\CategoriesController');
        Route::resource('/collaborationtags', 'Admin\Collaboration\TagsController'); 
        Route::post('/collaborationremovecategory', 'Admin\Collaboration\CategoriesController@removecategory')->name('collaboration-remove-category');
        Route::post('/collaborationremovetag', 'Admin\Collaboration\TagsController@removetag')->name('collaboration-remove-tag');
        Route::post('/collaborationremoveblog', 'Admin\Collaboration\CollaborationController@removeblog')->name('remove-collaboration');


        /*
        |--------------------------------------------------------------------------
        | Careers
        |--------------------------------------------------------------------------
        */        
        Route::resource('/careers', 'Admin\Careers\CareersController'); 
        Route::get('/careerrequests', 'Admin\Careers\CareersController@requests')->name('career-requests'); 
        Route::post('/removecareer', 'Admin\Careers\CareersController@removecareer')->name('remove-career');


        /*
        |--------------------------------------------------------------------------
        | Meetings
        |--------------------------------------------------------------------------
        */        
        Route::resource('/meetings', 'Admin\Meetings\MeetingsController'); 
        Route::get('/meetingrequests', 'Admin\Meetings\CareersController@requests')->name('meeting-requests'); 
        Route::post('/removemeeting', 'Admin\Meetings\MeetingsController@removemeeting')->name('remove-meeting');


        /*
        |--------------------------------------------------------------------------
        | Learning Tree
        |--------------------------------------------------------------------------
        */ 
        Route::resource('/learningtree', 'Admin\LearningTree\LearningTreeController'); 
        

        /*
        |--------------------------------------------------------------------------
        | Others
        |--------------------------------------------------------------------------
        */ 
        Route::resource('/permissions', 'Admin\Permissions\PermissionsController'); 
        Route::get('/logo', 'MasterController@logo')->name('admin-logo');
        Route::get('/setting', 'MasterController@setting')->name('admin-setting');
        Route::get('/messages', 'MasterController@messages')->name('messages');
        Route::get('/subscribers', 'MasterController@subscribers')->name('subscribers');
        Route::get('/socialmedia', 'MasterController@socialmedia')->name('socialmedia');
        
        Route::post('/social', 'MasterController@social')->name('social');
        Route::post('/getreceiveremail', 'MasterController@getreceiveremail')->name('getreceiveremail');
        Route::post('/receiveremail', 'MasterController@receiveremail')->name('receiveremail');
        Route::post('/getmessage', 'MasterController@getmessage')->name('getmessage');

        Route::get('/slideshow/{lang}', 'Admin\Slider\SliderController@index')->name('admin-show-slider');
        Route::post('/updateslideshow', 'Admin\Slider\SliderController@updatephotos')->name('admin-update-slider');
        Route::post('/removeslider', 'Admin\Slider\SliderController@removegallery')->name('remove-slider');
        
    });


});


    /*
    |--------------------------------------------------------------------------
    | Back Routes (Admin Actions)
    |--------------------------------------------------------------------------
    */

    Route::post('/changelogo', 'MasterController@changelogo')->name('changelogo');
    Route::post('/editsetting', 'MasterController@editsetting')->name('edit-setting');
    Route::post('/editinfo', 'MasterController@editinfo')->name('edit-info');
    Route::post('/changeProfilePicture', 'MasterController@changeProfilePicture')->name('change-profile-picture');
    Route::post('/changepassword', 'MasterController@changepassword')->name('change-password');
    Route::post('/enableuser', 'MasterController@enableuser')->name('enable-user');

    /*
    |--------------------------------------------------------------------------
    | To-Do List
    |--------------------------------------------------------------------------
    */

    Route::post('/addtodo', 'MasterController@addtodo')->name('add-todo');
    Route::post('/gettodo', 'MasterController@gettodo')->name('get-todo');
    Route::post('/edittodo', 'MasterController@edittodo')->name('edit-todo');
    Route::post('/removetodo', 'MasterController@removetodo')->name('remove-todo');

    /*
    |--------------------------------------------------------------------------
    | Notes
    |--------------------------------------------------------------------------
    */
        
    Route::post('/createnote', 'MasterController@createnote')->name('create-note');
    Route::post('/addnote', 'MasterController@addnote')->name('add-note');
    Route::post('/getnote', 'MasterController@getnote')->name('get-note');
    Route::post('/shownote', 'MasterController@shownote')->name('show-note');
    Route::post('/editnote', 'MasterController@editnote')->name('edit-note');
    Route::post('/removenote', 'MasterController@removenote')->name('remove-note');

    /*
    |--------------------------------------------------------------------------
    | Calendar
    |--------------------------------------------------------------------------
    */
        
    Route::get('/getevent/{user}', 'MasterController@getevent')->name('get-event');
    Route::post('/addevent', 'MasterController@addevent')->name('add-event');
    Route::post('/updateevent', 'MasterController@updateevent')->name('update-event');
    Route::post('/showevent', 'MasterController@showevent')->name('show-event');
    Route::post('/editnevent', 'MasterController@editevent')->name('edit-event');
    Route::post('/removeevent', 'MasterController@removeevent')->name('remove-event');


    /*
    |------------------------------------------------------------------------
    | Link Storage
    |------------------------------------------------------------------------
    */

    Route::get('/linkstorage', function () {
        Artisan::call('storage:link');
    });

