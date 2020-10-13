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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('/admin/quests/uploadImage', 'UploadimageController@uploadImage')->name('uploadImage')->middleware('auth');

Route::get('/admin', 'QuestionController@getList')->name('home')->middleware('auth');

Route::get('/admin/quests/list', 'QuestionController@getList')->name('getList')->middleware('auth');
Route::get('/admin/quests/list/{category}', 'QuestionController@getList')->name('getList')->middleware('auth');
Route::get('/admin/quests/list/{category}', 'QuestionController@getListCategory')->name('getListCategory')->middleware('auth');
Route::get('/admin/quests/create', 'QuestionController@create')->name('create')->middleware('auth');
Route::get('/admin/quests/view/{id}', 'QuestionController@view')->name('view')->middleware('auth');
Route::post('/admin/quests/save/{id}', 'QuestionController@save')->name('save')->middleware('auth');
Route::post('/admin/quests/save/new', 'QuestionController@saveNew')->name('saveNew')->middleware('auth');
Route::get('/admin/quests/destroy/{id}', 'QuestionController@destroy')->name('destroy')->middleware('auth');


Route::get('/admin/films/list', 'FilmsController@getList')->name('films')->middleware('auth');
Route::post('/admin/films/save', 'FilmsController@save')->name('filmsSave')->middleware('auth');

Route::get('/admin/members/list', 'MemberController@getList')->name('members')->middleware('auth');
Route::get('/admin/members/list/hidenovideo', 'MemberController@getListHideNoVideo')->name('membersHideNoVideo')->middleware('auth');
Route::get('/admin/members/list/hidfalsecodeword', 'MemberController@getListHideFalseCodeword')->name('membersHideFalseCodeword')->middleware('auth');
Route::get('/admin/members/list/hidenovideoandfalsecodeword', 'MemberController@getListHideFalseCodewordAndNoVideo')->name('membersHideNoVideoFalseCodeword')->middleware('auth');
Route::get('/admin/members/{id}', 'MemberController@view')->name('memberView')->middleware('auth');

Route::get('/admin/members/memberCert/{id}', 'MemberController@generateOneCertMember')->name('certmember')->middleware('auth');
Route::get('/admin/members/winnerCert/{id}', 'MemberController@generateOneCertWinner')->name('certwinner')->middleware('auth');
Route::get('/admin/members/prizeCert/{id}', 'MemberController@generateOneCertPrize')->name('certprize')->middleware('auth');

Route::get('/quiz', 'QuizController@list')->name('quiz');
Route::post('/quiz/save', 'QuizController@quizSave')->name('quizSave');
Route::get('/result/{member}','ResultController@showResult')->name('result');
 