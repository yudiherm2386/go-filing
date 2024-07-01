<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
    
// });


Route::get('/', [AuthController::class, 'Login'])->name('Login');
Route::get('/login', [AuthController::class, 'Login'])->name('Login');
Route::post('/login', [AuthController::class, 'DoLogin'])->name('DoLogin');
Route::get('/generate-password', [AuthController::class, 'GenPassword'])->name('GenPassword');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [AuthController::class, 'Logout'])->name('Logout');
    Route::get('/dashboard', [DashboardController::class, 'Home'])->name('Home');

    /*
    Route::controller(Select2Controller::class)->prefix('select2')->name('select2.')->group(function () {
        Route::get('master_program/', [Select2Controller::class, 'master_program'])->name('master_program');
        Route::get('get/', [Select2Controller::class, 'get'])->name('get');
        Route::post('add', [Select2Controller::class, 'store'])->name('add');
    });

    Route::get('/dashboard', function () {
        $permission = Permission::get();
        return view('modules.dashboard', compact('permission'));
    })->name('dashboard');

    Route::controller(UserController::class)->prefix('management-user')->name('management-user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/list', [UserController::class, 'list'])->name('list');
        Route::delete('/delete', [UserController::class, 'destroy'])->name('delete');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/detail/{id}', [UserController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [UserController::class, 'update'])->name('update');
    });

    Route::controller(AnggaranController::class)->prefix('anggaran')->name('anggaran.')->group(function () {
        Route::get('/', [AnggaranController::class, 'index'])->name('index');
        Route::post('/list', [AnggaranController::class, 'list'])->name('list');
        Route::delete('/delete', [AnggaranController::class, 'destroy'])->name('delete');
        Route::post('/store', [AnggaranController::class, 'store'])->name('store');
        Route::get('/detail/{id}', [AnggaranController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [AnggaranController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [AnggaranController::class, 'update'])->name('update');
        Route::get('/upload', [AnggaranController::class, 'upload'])->name('upload');
        Route::post('/list-component', [AnggaranController::class, 'listComponent'])->name('listComponent');
        Route::post('/approve', [AnggaranController::class, 'approve'])->name('approve');
        Route::post('/reject', [AnggaranController::class, 'reject'])->name('reject');
        Route::post('/upload-save', [AnggaranController::class, 'uploadSave'])->name('uploadSave');
        Route::get('/synchrone', [AnggaranController::class, 'synchrone'])->name('synchrone');
        Route::post('/synchrone-save', [AnggaranController::class, 'synchroneSave'])->name('synchroneSave');
    });

    Route::controller(RencanaKegiatanController::class)->prefix('rencana-kegiatan')->name('rencana-kegiatan.')->group(function () {
        Route::get('/', [RencanaKegiatanController::class, 'index'])->name('index');
        Route::get('/create', [RencanaKegiatanController::class, 'create'])->name('create');
        Route::get('/list', [RencanaKegiatanController::class, 'list'])->name('list');
        Route::get('/list_history', [RencanaKegiatanController::class, 'list_history'])->name('list_history');
        Route::delete('/delete', [RencanaKegiatanController::class, 'destroy'])->name('delete');
        Route::post('/store', [RencanaKegiatanController::class, 'store'])->name('store');
        Route::get('/detail/{id}', [RencanaKegiatanController::class, 'show'])->name('show');
        Route::get('/approval/{id}', [RencanaKegiatanController::class, 'approval'])->name('approval');
        Route::get('/getDataRekeningKomponen', [RencanaKegiatanController::class, 'getDataRekeningKomponen'])->name('getDataRekeningKomponen');
        Route::get('/getbarcodeTimeline/{id}', [RencanaKegiatanController::class, 'getbarcodeTimeline'])->name('getbarcodeTimeline');
        Route::get('/generateNomorSurat', [RencanaKegiatanController::class, 'generateNomorSurat'])->name('generateNomorSurat');
    });
    Route::controller(DocumentController::class)->prefix('document')->name('document.')->group(function () {
        Route::get('/download', [DocumentController::class, 'download'])->name('download');
        Route::get('/preview', [DocumentController::class, 'preview'])->name('preview');
        Route::get('/preview-document', [DocumentController::class, 'previewDocument'])->name('preview-document');
        Route::post('/preview-kak', [DocumentController::class, 'previewKAK'])->name('preview-kak');
        Route::post('/store-kak', [DocumentController::class, 'storeKAK'])->name('store-kak');

        Route::post('/preview-spph', [DocumentController::class, 'previewSPPH'])->name('preview-spph');
        Route::post('/store-spph', [DocumentController::class, 'storeSPPH'])->name('store-spph');

        Route::post('/preview-boq', [DocumentController::class, 'previewBOQ'])->name('preview-boq');
        Route::post('/store-boq', [DocumentController::class, 'storeBOQ'])->name('store-boq');

        Route::post('/preview-rhps', [DocumentController::class, 'previewRHPS'])->name('preview-rhps');
        Route::post('/store-rhps', [DocumentController::class, 'storeRHPS'])->name('store-rhps');

        Route::post('/preview-spp', [DocumentController::class, 'previewSPP'])->name('preview-spp');
        Route::post('/store-spp', [DocumentController::class, 'storeSPP'])->name('store-spp');

        Route::post('/preview-hps', [DocumentController::class, 'previewHPS'])->name('preview-hps');
        Route::post('/store-hps', [DocumentController::class, 'storeSPH'])->name('store-hps');

        Route::post('/preview-rab', [DocumentController::class, 'previewRab'])->name('preview_rab');
        Route::post('/store-rab', [DocumentController::class, 'storeRAB'])->name('store-rab');

        Route::get('/load-templates', [DocumentController::class, 'loadTemplates'])->name('load-templates');
        Route::get('/preview-templates', [DocumentController::class, 'previewTemplates'])->name('preview-templates');
        Route::post('/preview-spekteknis', [DocumentController::class, 'previewSpekTeknis'])->name('preview_spekteknis');
        Route::post('/store-spekteknis', [DocumentController::class, 'storeSpekTeknis'])->name('store-spekteknis');

        Route::get('/getDataDokumen', [DocumentController::class, 'getDataDocument'])->name('get-data-dokumen');
    });
    Route::controller(ApprovalController::class)->prefix('approval')->name('approval.')->group(function () {
        Route::post('/store', [ApprovalController::class, 'store'])->name('store');
    });

    Route::controller(QrcodeController::class)->prefix('verifikasi')->name('verifikasi.')->group(function () {
        Route::get('/{id}', [QrcodeController::class, 'detail'])->name('document');
    });
    
    // Routing for Data Templates
    Route::controller(TemplatesController::class)->prefix('templates')->name('templates.')->group(function () {
        Route::get('/', [TemplatesController::class, 'index'])->name('index');
        Route::get('/list', [TemplatesController::class, 'list'])->name('list');
        Route::get('/create', [TemplatesController::class, 'create'])->name('create');
        Route::get('/options', [TemplatesController::class, 'option'])->name('options');
        Route::get('/print/{id}', [TemplatesController::class, 'print'])->name('print');
        Route::get('/preview/{id}', [TemplatesController::class, 'preview'])->name('preview');
        Route::get('/create_spekteknis', [TemplatesController::class, 'create_spekteknis'])->name('create_spekteknis');
        Route::get('/create_rab', [TemplatesController::class, 'create_rab'])->name('create_rab');

    });
    */

});
