<?php

use App\Http\Controllers\artisteController;
use App\Http\Controllers\bandeController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\PiecesMusicalsController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\UsersController;
use App\Models\PiecesMusicals;
use App\Models\playlist;
use App\Models\Users;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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






Route::group(['middleware' => 'authenticate', 'prefix' => 'admin'], function () {
    //dashboard
    Route::get('/dashboard', [dashboardController::class, 'dashboard']);
    // show artiste form 
    Route::get('/create/artiste', [artisteController::class, 'show']);
    // store artiste 
    Route::post('/artiste/store', [artisteController::class, 'store']);
    // show edit form 
    Route::get('/artiste/{artiste}/edit', [artisteController::class, 'edit']);
    // update
    Route::put('/artiste/{artiste}', [artisteController::class, 'update']);
    // delete
    Route::delete('/artiste/{artiste}', [artisteController::class, 'delete']);
    Route::get('/artistes', [artisteController::class, 'indexArtiste']);
    // pieceMusical
    Route::get('/piecesMusicals', [PiecesMusicalsController::class, 'showPiecesMusicals']);
    Route::get('/piecesMusicals/create', [PiecesMusicalsController::class, 'create']);
    Route::post('/piecesMusicals/store', [PiecesMusicalsController::class, 'store']);
    Route::get('/pieceMusical/{pieceMusical}/edit', [PiecesMusicalsController::class, 'edit']);
    Route::put('/pieceMusical/{pieceMusical}/', [PiecesMusicalsController::class, 'update']);


    // bande
    Route::get('/bandes', [bandeController::class, 'index']);
    Route::get('/bande/create', [bandeController::class, 'create']);
    Route::post('/bande/store', [bandeController::class, 'store']);
    Route::get('/bande/{bande}/edit', [bandeController::class, 'edit']);
    Route::put('/bande/{bande}', [bandeController::class, 'update']);
    Route::delete('/bande/{bande}/delete', [bandeController::class, 'delete']);

    // comments
    Route::get('/comments/show', [commentController::class, 'show']);

    // archive
    Route::get('/{pieceMusical}/archive', [PiecesMusicalsController::class, 'archive']);
    Route::get('/users', [dashboardController::class, 'users']);

    // user admin 
    Route::get('/users/{Users}/beAdmin', [UsersController::class, 'beAdmin']);
    Route::get('/users/{Users}/removeAdmin', [UsersController::class, 'removeAdmin']);
});
// Auth::routes();
Route::post('/piecesMusicals/{pieceMusical}/like', [PiecesMusicalsController::class, 'like']);
Route::delete('/piecesMusicals/{pieceMusical}/unlike', [PiecesMusicalsController::class, 'unlike']);


// comments 
Route::post('/comment', [commentController::class, 'store']);
Route::delete('/comment/{comment}', [commentController::class, 'delete']);

// playlist

Route::post('/playlist/store', [PlaylistController::class, 'store']);
Route::get('/playlist/{playlist}/show', [PlaylistController::class, 'showPlaylist']);
Route::post('/MusicsPlaylist', [PlaylistController::class, 'MusicsPlaylist']);




// show index 
Route::get('/', [pagesController::class, 'index']);

// show details
Route::get('/pieceMusical/{pieceMusical}/details', [pagesController::class, 'details']);


// users register
Route::get('/Users.register', [UsersController::class, 'register']);
Route::post('/store', [UsersController::class, 'store']);

// users login
// show form login
Route::get('/Users.login', [UsersController::class, 'login']);
Route::post('/Users.login', [UsersController::class, 'authentificate']);
// logout
Route::post('/Users.logout', [UsersController::class, 'logout']);
