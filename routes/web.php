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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::get('/', 'FrontController@index')->name('welcome');
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
    Route::get('/calendar', 'MasterController@calendar')->name('calendar');

    /*
    |--------------------------------------------------------------------------
    | Admin Routes 
    |--------------------------------------------------------------------------
    */

    Route::group(['prefix' => 'admin','middleware' => [ 'admin' ]], function () 
    {        
        Route::resource('/staff', 'Admin\Staff\StaffController'); 
        Route::get('/activestaff', 'Admin\Staff\StaffController@active')->name('active-staff');
        Route::get('/deactivestaff', 'Admin\Staff\StaffController@deactive')->name('deactive-staff');
        Route::get('/staff/{id}/profile', 'Admin\Staff\StaffController@profile')->name('staff.profile');

        Route::resource('/permissions', 'Admin\Permissions\PermissionsController'); 
        Route::get('/logo', 'MasterController@logo')->name('admin-logo');
        Route::get('/setting', 'MasterController@setting')->name('admin-setting');
    });

    /*
    |--------------------------------------------------------------------------
    | Merchant Routes 
    |--------------------------------------------------------------------------
    */

    Route::group(['prefix' => 'merchant','middleware' => [ 'merchant' ]], function () 
    {
        
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

