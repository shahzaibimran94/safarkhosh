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
*/



Auth::routes();
//frontend routes
Route::get('/search/{query?}', function () {
    return view('index');
});
Route::get('trip/search/{query?}', function () {
    return view('index');
});
Route::get('book/search/{query?}', function () {
    return view('index');
});
Route::get('trip/{id?}', function () {
    $data = array('name' => 'shahzaib' );
    return view('pages.tripNew')->with('data',$data);
});
Route::get('book/{id?}', function () {
    return view('pages.order');
});
Route::get('search/api/user/{id}','SearchController@userData');
Route::get('search/api/op/{operator}','SearchController@opEmail');
Route::get('search/api/update/{id}/{name}/{pass}','SearchController@updateUser');
Route::get('search/api/recent','SearchController@recentTrip');
Route::get('search/api/trip/{id}','SearchController@detail');
Route::get('search/api/tour/{id?}', 'SearchController@index');
Route::get('search/api/service/{id?}', 'SearchController@service');
Route::get('search/api/rate/{id}/{se}/{v}/{st}/{fa}/{f}','SearchController@rate');
Route::get('/', function () {
    return view('main');
});
Route::post('main/api/searchtour/{query?}/{from?}/{to?}', 'SearchController@search');
//Route::get('search/api/tour/{id?}', 'SearchController@search');
Route::get('search/api/{username}/{password}','IndexController@index');
Route::get('search/api/{name}/{email}/{username}/{password}','IndexController@saveUser');
Route::get('search/api/order/{name}/{cnic}/{contact}/{email}/{title}/{operator}/{quantity}/{type}/{cost}/{id}/{tourId}/{invoice}/{extras?}','IndexController@order');


Route::get('howItWork',function(){
	return view('pages.howitWorks');
});
Route::get('about',function(){
	return view('pages.about');
});

//User Managment Routes
//Route::get('/login', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/logout', 'HomeController@logout');
Route::get('Useradd', 'HomeController@newUser');
Route::post('usersave', 'HomeController@saveUser');
Route::get('viewUser', 'HomeController@viewUser');
Route::get('Roleassign', 'HomeController@roleassign');
Route::get('edituser/{id}', 'HomeController@newUser');
Route::get('trash/{id}', 'HomeController@deluser');
Route::post('rolesAssign', 'HomeController@assignRole');
//admin Routes
Route::get('addAdmin','AdminController@index');
Route::post('addAdmin','AdminController@create');
Route::get('viewAdmin','AdminController@view');
Route::get('editAdmin/{id}','AdminController@set');
Route::get('delAdmin/{id}', 'AdminController@del');
Route::post('save', 'AdminController@save');
//Services Routes
Route::get('Index/{id?}','ServiceController@index');
Route::post('saveService','ServiceController@saveService');
Route::get('del/{id}','ServiceController@delete');
//Gear Routes
Route::get('gearIndex/{id?}','GearController@gearindex');
Route::post('savegearcat','GearController@savegearcat');
Route::get('geardel/{id}','GearController@delete');
Route::get('viewGear','GearController@viewGear');
Route::get('addGear','GearController@addGear');
Route::post('addGear','GearController@insertGear');
Route::get('updateGear/{id}','GearController@setGear');
Route::post('updateGear','GearController@updateGear');
Route::get('deleteGear/{id}','GearController@delGear');
//Seller Route
Route::get('sellerIndex/{id?}','GearController@sellerindex');
Route::post('saveseller','GearController@saveseller');
Route::get('sellerdel/{id}','GearController@deleteseller');
Route::get('updateseller/{id}','GearController@updateseller');
Route::post('saveupdateseller','GearController@saveupdateSeller');
//Tours Operator routes
Route::get('operators','OperatorController@index');
Route::get('operatorForm','OperatorController@form');
Route::post('addoperator','OperatorController@add');
Route::get('editOperator/{id}','OperatorController@edit');
Route::post('updateOperator','OperatorController@update');
Route::get('blockOperator/{id}','OperatorController@block');
Route::get('delOperator/{id}','OperatorController@del');
Route::get('publish/{opName}','OperatorController@tours');
Route::get('rate/{title}','OperatorController@rate');
//Tours routes
Route::get('tours','TourController@index');
Route::get('tourForm','TourController@form');
Route::post('addtour','TourController@add');
Route::get('editTour/{id}','TourController@set');
Route::post('updateTour','TourController@update');
Route::get('blockTour/{id}','TourController@block');
Route::get('delTour/{id}','TourController@delete');
Route::get('ajaxemail/{id}','TourController@checkmail');
Route::get('ajaxusername/{id}','TourController@checkusername');
//Order Routes
Route::get('order/{id?}','IndexController@orderData');
Route::get('changeOrder/{id}','IndexController@changeOrderStatus');

Route::get('index',function(){
	return view('index');
});

Route::post('search',function(){
	return view('pages.search');
});

Route::get('print',function(){
    return view('pages.printView');
});

Route::get('search/api/find/questions/{tourid}','QuestionController@index');
Route::get('search/api/comment/{id}/{opEmail}/{coment}/{name}/{email}','QuestionController@comment');

//routes for rating

Route::get('rateThisTrip/{tourid}','QuestionController@rating');
Route::post('storeRating','QuestionController@store');

Route::get('rw',function(){
    return view('ratingMail');
});