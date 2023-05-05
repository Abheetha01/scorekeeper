<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanelAdminUsersPage;
use App\Http\Controllers\AdminPanelMatchesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('board/home');
});

Route::get('/matches', function () {
    return view('board/matches');
});

Route::get('/scoreboard', function () {
    return view('board/scoreboard');
});

Route::get('/admin-panel/sign-in', function () {
    return view('admin/sign-in');
});

Route::get('/admin-panel/sign-up', function () {
    return view('admin/sign-up');
});

Route::get('/admin-panel/scoreboard', function () {
    return view('admin/scoreboard');
});

Route::get('/admin-panel/teams', function () {
    return view('admin/teams');
});

Route::get('/admin-panel/players', function () {
    return view('admin/players');
});

Route::get('/admin-panel/matches', function () {
    return view('admin/matches');
})->name('admin-matches');

Route::get('/admin-panel/admin-users', function () {
    return view('admin/admin-user');
});

// Route::get('/admin-panel/admin-users', [AdminPanelAdminUsersPage::class, 'sendData']);
Route::post('/admin-panel/admin-users.json', [AdminPanelAdminUsersPage::class, 'sendDataXMLHTTP']);

Route::post('/admin-panel/adminUserUpdate', [AdminPanelAdminUsersPage::class, 'updateAdminUserStatus']);


Route::post('/admin-panel/matches.json', [AdminPanelMatchesController::class, 'sendDataXMLHTTP']);

Route::post('/admin-panel/matches-update', [AdminPanelMatchesController::class, 'updateMatch']);

Route::post('/admin-panel/matches-delete', [AdminPanelMatchesController::class, 'deleteMatch']);

Route::post('/admin-panel/matches-add', [AdminPanelMatchesController::class, 'addMatch']);

Route::post('/admin-panel/get-all-plyers', [AdminPanelMatchesController::class, 'getTeamAllPlayers']);

Route::post('/admin-panel/get-selected-players', [AdminPanelMatchesController::class, 'getTeamSelectedPlayers']);
