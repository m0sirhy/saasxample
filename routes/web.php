<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/use App\Student;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {
 Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Student', 'StudentController@index');
Route::post('/Student', 'StudentController@save');
Route::post('/drop', 'StudentController@drop');
Route::get('/Course', 'CourseController@index');
Route::post('/pay', 'StudentController@payment');

Route::post('/Course', 'CourseController@save');
});
Route::get('/dashboard', 'DashboardController@index');


Route::get('/test', function(){
    $Student = Student::where('user_id','1')->get()->first();

    return view('aja',compact('Student'));
}
);

Route::post('/ajax_upload/action', 'ajaxController@action')->name('ajaxupload.action');
?>