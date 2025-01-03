<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\JadwalKegiatanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\LogAkunController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TestimonialController;

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
    return view('index');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/pages/programpelatihan', function () {
    return view('programpelatihan');
});

Route::get('/pages/instruktur', function () {
    return view('instruktur');
});

Route::get('/pages/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/about', function () {
    return view('about');
}); //

Route::get('/reviews/reviews.index', function () {
    return view('reviews');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/404', function () {return view('404');});

Route::get('/tentanglpk', function () {
    return view('tentanglpk');
});

Route::get('/add-testimonial', [TestimonialController::class, 'showForm']);
Route::post('/submit-testimonial', [TestimonialController::class, 'submitTestimonial'])->name('submitTestimonial');
Route::get('/testimonials', [TestimonialController::class, 'showTestimonials'])->name('testimonial.show');
Route::get('/pages/testimonials', [TestimonialController::class, 'showTestimonials'])->name('testimonials');


Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');


Route::get('/welcome', function () {
    return view('welcome');
});


Route::post('regist', [UserController::class, 'insertRegis'])->name('regist');
Route::post('regist', [LogAkunController::class, 'store']);
/**
 * socialite auth
 */
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


    //akun
    Route::get('/profile', [LogAkunController::class, 'dataprofil'])->name("profile");
    Route::post('/edit-profile', [LogAkunController::class, 'editprofil']);
    Route::post('/edit-pw', [LogAkunController::class, 'editakun']);

    //user/pengguna
    Route::get('/data-user', [UserController::class, 'datauser'])->name('data-user');
    Route::post('/save-user', [UserController::class, 'simpanuser']);
    Route::get('/edit-user/{user_id}', [UserController::class, 'edituser'])->name('edit-user');
    Route::post('/edit-pw-user', [UserController::class, 'editakun'])->name("edit-pw-user");
    Route::post('/update-user/{user_id}', [UserController::class, 'updateuser'])->name('update-user');
    Route::get('/delete-user/{user_id}', [UserController::class, 'hapususer'])->name('delete-user');

    //sekolah
    Route::get('/data-sekolah', [SekolahController::class, 'datasekolah'])->name('data-sekolah');
    Route::post('/save-school', [SekolahController::class, 'simpansekolah']);
    Route::post('/update-school/{NPSN}', [SekolahController::class, 'updatesekolah']);
    Route::get('/delete-school/{id}', [SekolahController::class, 'hapussekolah']);

    //kursus
    Route::get('/data-kursus', [ProgramStudiController::class, 'datakursus'])->name('data-kursus');
    Route::post('/save-kursus', [ProgramStudiController::class, 'simpankursus']);
    Route::post('/update-kursus/{id_kursus}', [ProgramStudiController::class, 'updatekursus']);
    Route::get('/delete-kursus/{id_kursus}', [ProgramStudiController::class, 'hapuskursus']);

    //jadwal
    Route::get('/data-jadwal', [JadwalKegiatanController::class, 'datajadwal'])->name('data-jadwal');
    Route::post('/save-jadwal', [JadwalKegiatanController::class, 'simpanjadwal']);
    Route::post('/update-jadwal/{id}', [JadwalKegiatanController::class, 'updatejadwal']);
    Route::get('/delete-jadwal/{id}', [JadwalKegiatanController::class, 'hapusjadwal']);

    //pendaftaran
    Route::get('/data-registration', [PendaftaranController::class, 'datapendaftaran'])->name('data-registration');
    Route::get('/form-registration', [PendaftaranController::class, 'inputpendaftaran']);
    Route::post('/save-registration', [PendaftaranController::class, 'simpanpendaftaran']);
    Route::get('/edit-registration/{id_pendaftaran}', [PendaftaranController::class, 'editpendaftaran']);
    Route::post('/update-registration/{id_pendaftaran}', [PendaftaranController::class, 'updatependaftaran']);
    Route::get('/delete-registration/{id_pendaftaran}', [PendaftaranController::class, 'hapuspendaftaran']);
    Route::get('/detail-registration/{id_pendaftaran}', [PendaftaranController::class, 'detailpendaftaran']);
    Route::get('/card-registration/{id_pendaftaran}', [PendaftaranController::class, 'kartupendaftaran']);

    Route::get('/verified-registration/{id_pendaftaran}', [PendaftaranController::class, 'verifikasistatuspendaftaran']);
    Route::get('/notverified-registration/{id_pendaftaran}', [PendaftaranController::class, 'notverifikasistatuspendaftaran']);
    Route::get('/invalid-registration/{id_pendaftaran}', [PendaftaranController::class, 'invalidstatuspendaftaran']);
    Route::get('/finish-registration/{id_pendaftaran}', [PendaftaranController::class, 'selesaistatuspendaftaran']);

    //pembayaran
    Route::get('/data-payment', [PembayaranController::class, 'datapembayaran'])->name('data-pembayaran');
    Route::post('/save-payment', [PembayaranController::class, 'simpanpembayaran']);
    Route::post('/update-payment/{id_pembayaran}', [PembayaranController::class, 'updatepembayaran']);
    Route::get('/delete-payment/{id_pembayaran}', [PembayaranController::class, 'hapuspembayaran']);

    Route::post('/upload-payment', [PembayaranController::class, 'updatebuktipembayaran'])->name('upload-payment');
    Route::get('/paid-payment/{id_pembayaran}', [PembayaranController::class, 'verifikasipembayaran']);
    Route::get('/unpaid-payment/{id_pembayaran}', [PembayaranController::class, 'belumbayar']);
    Route::get('/invalid-payment/{id_pembayaran}', [PembayaranController::class, 'invalidbayar']);

    //pengumuman
    Route::get('/data-announcement', [PengumumanController::class, 'datapengumuman'])->name('data-pengumuman');
    Route::get('/view-announcement/{id_pendaftaran}', [PengumumanController::class, 'lihatpengumuman']);
    //Route::get('/view-announcement', [PengumumanController::class, 'lihatpengumuman']);
    Route::post('/save-announcement', [PengumumanController::class, 'simpanpengumuman']);
    Route::post('/update-announcement/{id_pengumuman}', [PengumumanController::class, 'updatepengumuman']);
    Route::get('/delete-announcement/{id_pengumuman}', [PengumumanController::class, 'hapuspengumuman']);
});

require __DIR__ . '/auth.php';
