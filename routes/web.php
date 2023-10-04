<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\LeagueParticipantController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PlayerStatisticController;

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



//HOME
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('liga', [HomeController::class, 'liga'])->name('liga');
Route::get('liga/{id}', [HomeController::class, 'lihatliga'])->name('lihatliga');
Route::get('club', [HomeController::class, 'club'])->name('club');
Route::get('pemain', [HomeController::class, 'pemain'])->name('pemain');
Route::get('kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('tentang', [HomeController::class, 'tentang'])->name('tentang');
Route::get('lihatclub/{id}', [HomeController::class, 'lihatclub'])->name('lihatclub');
Route::get('lihatpemain/{id}', [HomeController::class, 'lihatpemain'])->name('lihatpemain');
Route::get('jadwal', [HomeController::class, 'jadwal'])->name('jadwal');
Route::get('pertandingan', [HomeController::class, 'pertandingan'])->name('pertandingan');
Route::get('pertandingandetail', [HomeController::class, 'pertandingandetail'])->name('pertandinganpertandingan');
Route::get('lihatjadwal/{id}', [HomeController::class, 'lihatjadwal'])->name('lihatjadwal');
Route::get('coach', [HomeController::class, 'coach'])->name('coach');

//ADMIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    // Rute yang hanya bisa diakses oleh admin
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/clubs', [ClubController::class, 'index'])->name('clubs.index');
        Route::get('/clubs/create', [ClubController::class, 'create'])->name('clubs.create');
        Route::post('/clubs/create', [ClubController::class, 'store'])->name('clubs.tambah');
        Route::get('/clubs/{id}', [ClubController::class, 'show'])->name('clubs.show');
        Route::get('/clubs/{id}/edit', [ClubController::class, 'edit'])->name('clubs.edit');
        Route::put('/clubs/{id}', [ClubController::class, 'update'])->name('clubs.update');
        Route::delete('/clubs/{id}', [ClubController::class, 'destroy'])->name('clubs.destroy');

        //pemain
        // Route::resource('players', PlayerController::class)->except(['show']);
        Route::get('players', [PlayerController::class, 'index'])->name('players.index');
        Route::get('players/edit/{id}', [PlayerController::class, 'edit'])->name('players.edit');
        Route::delete('players/destroy/{id}', [PlayerController::class, 'destroy'])->name('players.destroy');
        Route::get('players/{id}', [PlayerController::class, 'show'])->name('players.show');
        Route::get('player/tambah', [PlayerController::class, 'tambah'])->name('players.create');
        Route::post('/players/store', [PlayerController::class, 'store'])->name('players.store');
        Route::get('/player/input', [PlayerController::class, 'inputexel'])->name('show.import');
        Route::post('/players/import', [PlayerController::class, 'import'])->name('players.import');
        Route::post('/players/update/{id}', [PlayerController::class, 'update'])->name('players.update');
        Route::put('/players/update/{id}', [PlayerController::class, 'update'])->name('players.updatee');

        Route::get('/leagues', [LeagueController::class, 'index'])->name('leagues.index');
        Route::get('/leagues/create', [LeagueController::class, 'create'])->name('leagues.create');
        Route::post('/leagues', [LeagueController::class, 'store'])->name('leagues.store');
        Route::get('/leagues/{id}', [LeagueController::class, 'show'])->name('leagues.show');
        Route::get('/leagues/{id}/edit', [LeagueController::class, 'edit'])->name('leagues.edit');
        Route::put('/leagues/{id}', [LeagueController::class, 'update'])->name('leagues.update');
        Route::delete('/leagues/{id}', [LeagueController::class, 'destroy'])->name('leagues.destroy');

        //jadwal liga
        Route::resource('matches', MatchController::class);

        //partisipan liga
        Route::get('league_participants/create', [LeagueParticipantController::class, 'create'])->name('league_participants.create');
        Route::post('league_participants', [LeagueParticipantController::class, 'store'])->name('league_participants.store');

        //statistik pemain
        // Route::resource('playerstatistics', PlayerStatisticController::class)->except(['show']);
        Route::get('/statistik', [PlayerStatisticController::class, 'index'])->name('playerstatistics.index');
        Route::get('/statistik/create', [PlayerStatisticController::class, 'create'])->name('playerstatistics.create');
        Route::post('/statistik', [PlayerStatisticController::class, 'store'])->name('playerstatistics.store');
        Route::get('/statistik/{id}', [PlayerStatisticController::class, 'show'])->name('playerstatistics.show');
        Route::get('/statistik/{id}/edit', [PlayerStatisticController::class, 'edit'])->name('playerstatistics.edit');
        Route::put('/statistik/{id}', [PlayerStatisticController::class, 'update'])->name('playerstatistics.update');
        Route::delete('/statistik/{id}', [PlayerStatisticController::class, 'destroy'])->name('playerstatistics.destroy');
        Route::get('/get-club/{player}', [PlayerController::class, 'getClub']);
        // Route::resource('pelatih', PelatihController::class);
        Route::get('pelatih/input', [PelatihController::class, 'inputexel'])->name('pelatih.input');
        Route::post('pelatih/importa', [PelatihController::class, 'importa'])->name('pelatih.importa');
        Route::get('pelatih', [PelatihController::class, 'index'])->name('pelatih.index');
        Route::get('pelatih/edit/{id}', [PelatihController::class, 'edit'])->name('pelatih.edit');
        Route::delete('pelatih/destroy/{id}', [PelatihController::class, 'destroy'])->name('pelatih.destroy');
        Route::get('pelatih/{id}', [PelatihController::class, 'show'])->name('pelatih.show');
        Route::get('tambahpelatih', [PelatihController::class, 'tambah'])->name('pelatih.tambah');
        Route::post('/pelatih/store', [PelatihController::class, 'store'])->name('pelatih.store');
    });
});
//ROUTE UNTUK CLUB
// routes/web.php
