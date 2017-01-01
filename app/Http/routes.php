<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\App;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TestEvent implements ShouldBroadcast
{
    public $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function broadcastOn()
    {
        return ['test-channel'];
    }
}

Route::get('/broadcast', function() {
    event(new TestEvent('Broadcasting in Laravel using Pusher!'));

    return view('welcome');
});


Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');

Route::controller('activities', 'ActivityController');
Route::controller('notifications', 'NotificationController');

Route::get('/bridge', function() {
    $pusher = App::make('pusher');

    $pusher->trigger( 'test-channel',
                      'test-event',
                      array('text' => 'Preparing the Pusher Laracon.eu workshop!'));

    return view('welcome');
});
Route::get('/test-after', function(){
    return view('tasks.after');
});

Route::get('/test-ready', function(){
    return view('tasks.ready');
});

Route::get('/', function(){
    return view('homepage');
});

Route::get('/test', function(){
    return view('app-dashboard');
});

// Homepage aslinya
// Route::get('/','TaskController@index');
// Halaman Statik Tentang
Route::get('/tentang', function(){
    return view('tentang');
});
// Halaman Statik Tentang

Route::get('/event', function(){
    return view('event');
});
// Halaman Statik Kontak

Route::get('/kontak', function(){
    return view('kontak');
});
// Tampilkan Blog Post
//Route::get('/blog', 'PostController@index');


//Route::get('/home',['as' => 'home', 'uses' => 'PostController@index']);


//authentication
Route::controllers([
 'auth' => 'Auth\AuthController',
 'password' => 'Auth\PasswordController',
]);
// check for logged in user
Route::group(['middleware' => ['auth']], function()
{
  Route::get('/dashboard',['as' => 'dashboard', 'uses' => 'DashboardController@index']);



  // TASKS

  // show all task
  Route::get('task/all','TaskController@all');

  // show new task form
  Route::get('task/new','TaskController@create');
  // save new task
  Route::post('task/new','TaskController@store');
  // edit task form
  //Route::get('task/edit/{slug}','TaskController@edit');
    Route::get('task/edit/{id}', 'TaskController@edit');
  // after build


  Route::get('task/after/{slug}','TaskController@after');


  // after build
  Route::get('task/test-build','TaskController@after');


	Route::get('task/test-build','TaskController@after');
  // update post
  Route::post('task/update','TaskController@update');
  // delete post
  Route::get('task/delete/{id}','TaskController@destroy');
  // display user's all posts
  Route::get('my-all-tasks','UserController@user_tasks_all');
  // task build
  Route::get('task/build/{id}','TaskController@build');

// ---------------------------------------------------------------------------------------------------
 // // show new post form
 // Route::get('new-post','PostController@create');
 // // save new post
 // Route::post('new-post','PostController@store');
 // // edit post form
 // Route::get('edit/{slug}','PostController@edit');
 // // update post
 // Route::post('update/post','PostController@update');
 // // delete post
 // Route::get('delete/post/{id}','PostController@destroy');
 // // display user's all posts
 // Route::get('my-all-posts','UserController@user_posts_all');

// ------------------------------------------------------//
// Apps
// show all task
  Route::get('app/all','TaskController@all');

  // show new app form
  Route::get('app/new','TaskController@create');
  // save new app
  Route::post('app/new','TaskController@store');
  // edit app form
  Route::get('app/edit/{slug}','TaskController@edit');
  // update app
  Route::post('app/update','TaskController@update');
  // delete app
  Route::get('app/delete/{id}','TaskController@destroy');



// --------------------------------------------------------//
 // Add user
 Route::get('user/add-user', 'UserController@create');
 // Store Add user
 Route::post('user/add-user','UserController@store');

 // Delete User
 Route::get('user/delete/{id}','UserController@destroy');

// display ALl user
 Route::get('user/all','UserController@index');
// edit detail user
  Route::get('user/edit/{id}','UserController@edit');
  // update detail user
  Route::post('update/user','UserController@update');

  // settings user masing-masing
  Route::get('user/settings/','UserController@settings');

// --------------------------------------------------------//

 // display user's drafts
 Route::get('my-drafts','UserController@user_posts_draft');
 // add comment
 Route::post('comment/add','CommentController@store');
 // delete comment
 Route::post('comment/delete/{id}','CommentController@distroy');
});

// end url yang musti lewat autentikasi

//users profile
//Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');

//users profile with username
Route::get('user/{username}','UserController@profile')->where('username', '[A-Za-z-_]+');

// display list of posts
//Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');

// display list of posts with username
Route::get('user/{username}/posts','UserController@user_posts')->where('username', '[A-Za-z-_]+');

Route::get('task/{slug}',['as' => 'task', 'uses' => 'TaskController@show'])->where('slug', '[A-Za-z0-9-_]+');




// Login dan Logut
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Daftar
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
