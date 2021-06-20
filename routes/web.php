<?php

use App\Http\Controllers\HistoryController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\UserController;
use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
    return view('auth.login');
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']] , function(){
    Route::resource('user', UserController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('spp', SppController::class);
    Route::resource('pembayaran', PembayaranController::class);
    // Cetak Laporan 
    Route::get('/laporan', [LaporanController::class,'index']);
    Route::get('/laporan/cetakPetugas', [LaporanController::class,'cetakPetugas']);
    Route::get('/laporan/cetakSpp', [LaporanController::class,'cetakSpp']);
    Route::get('/laporan/cetakKelas', [LaporanController::class,'cetakKelas']);
    Route::get('/laporan/cetakSiswa', [LaporanController::class,'cetakSiswa']);
    Route::get('/laporan/cetakPembayaran', [LaporanController::class,'cetakPembayaran']);
    Route::get('/laporan/cetakHistori', [LaporanController::class,'cetakHistori']);


    Route::get('/petugas', function () {
        $user = User::get();
        return view('petugas.index',compact('user'));
    });
    Route::get('/history', function () {
        $pembayaran = DB::table('pembayarans')->join('users','pembayarans.id_petugas','=','users.id')->get();
        return view('history',compact('pembayaran'));
    });

    Route::get('/dashboard', function () {
        $users = User::all();
        $siswa = Siswa::all();
        return view('dashboard',compact('users','siswa'));
    });

    Route::post('search',[HistoryController::class,'search'])->name('searchSiswa');
});


Route::get('/laporan/spp', [LaporanController::class,'spp']);
Route::get('/laporan/spp/pdf', [LaporanController::class,'sppPdf']);

