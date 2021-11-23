<?php
/////////////////////////////////////////// Main Routing //////////////////////////////////
// Route To home Page
Route::get('/', function () {
    return view('main.home');
});

// Route For Feedback
Route::get('/feedback' , "SharedController@makeFeedback");
Route::post('/feedback' , "SharedController@makeFeedback");

// Route ==> Login
Route::get('/login' , "SharedController@login");
Route::post('/login' , "SharedController@login");

// Accounter Routes

// Create new Actor
Route::get('/accounter/newEmp' , "AccounterController@createNewActor");
Route::post('/accounter/newEmp' , "AccounterController@createNewActor");

// Show All Actors
Route::get('/accounter/showActors' , "AccounterController@showActors");
Route::post('/accounter/showActors' , "AccounterController@showActors");

// Show All Actors To Take Ateendance
Route::get('/accounter/attendance' , "AccounterController@showActorsForAttendance");
Route::post('/accounter/attendance' , "AccounterController@showActorsForAttendance");

// Actor is Already Attended
Route::get('/accounter/attendance_yes/{id}' , "AccounterController@attend");

// Actor Not Attend
Route::get('/accounter/attendance_no/{id}' , "AccounterController@notAttend");

// Route To get Statistics Page
Route::get('/accounter/statistics' , "AccounterController@getStatistics");
Route::post('/accounter/statistics' , "AccounterController@getStatistics");
// Route To get Result Of Action For Choosing Month And Save It And Show Result
Route::get('/accounter/result_of_statistics' , "AccounterController@getResult");
Route::post('/accounter/result_of_statistics' , "AccounterController@getResult");

// Route For Get Update Salaries Page
Route::get('/accounter/update_salaries' , "AccounterController@getUpdateSalariesView");
Route::post('/accounter/update_salaries' , "AccounterController@getUpdateSalariesView");

// Route For Sinding id of selected user
Route::get('/accounter/updating/{id}' , "AccounterController@getIdForUpdating");

Route::get('/accounter/updating/{id}' , "AccounterController@getIdForUpdating");


Route::get('/accounter/makingUpdating' , "AccounterController@makeUpdating");
Route::post('/accounter/makingUpdating' , "AccounterController@makeUpdating");

///////////////////////////////////////////////// ADMIN ROUTES ////////////////////////////////
// Route To Get Main View Of Admin (Statistics)
Route::get('/admin/statistics', "AdminController@statistics");
// Route To Show All Actors In Our system
Route::get('/admin/showAllActors' , "AdminController@show_Actors");
// Route For See All Feedbacks
Route::get('/admin/showFeedbacks' , "AdminController@showFeedbacks");
