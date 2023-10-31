<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/ticket-list', function () {
    return view('ticket-list');
});

Route::get('/app-chat', function () {
    return view('app-chat');
});

Route::get('/app-calendar', function () {
    return view('app-calendar');
});

Route::get('/form-inputs', function () {
    return view('form-inputs');
});

Route::get('/form-input-grid', function () {
    return view('form-input-grid');
});

Route::get('/form-checkbox-radio', function () {
    return view('form-checkbox-radio');
});

Route::get('/form-checkbox-radio', function () {
    return view('form-checkbox-radio');
});






Route::get('/table-basic', function () {
    return view('table-basic');
});


Route::get('/table-dark-basic', function () {
    return view('table-dark-basic');
});

Route::get('/table-sizing', function () {
    return view('table-sizing');
});

Route::get('/table-layout-coloured', function () {
    return view('table-layout-coloured');
});

Route::get('/table-datatable-basic', function () {
    return view('table-datatable-basic');
});

Route::get('/chart-morris', function () {
    return view('chart-morris');
});

Route::get('/chart-chart-js', function () {
    return view('chart-chart-js');
});

Route::get('/chart-knob', function () {
    return view('chart-knob');
});

Route::get('/ui-buttons', function () {
    return view('ui-buttons');
});

Route::get('/ui-modals', function () {
    return view('ui-modals');
});

Route::get('/ui-tab', function () {
    return view('ui-tab');
});

Route::get('/ui-tooltip-popover', function () {
    return view('ui-tooltip-popover');
});

Route::get('/ui-notification', function () {
    return view('ui-notification');
});

Route::get('/ui-progressbar', function () {
    return view('ui-progressbar');
});

Route::get('/ui-typography', function () {
    return view('ui-typography');
});


Route::get('/ui-bootstrap', function () {
    return view('ui-bootstrap');
});

Route::get('/ui-breadcrumb', function () {
    return view('ui-breadcrumb');
});

Route::get('/ui-list-media', function () {
    return view('ui-list-media');
});

Route::get('/ui-grid', function () {
    return view('ui-grid');
});

Route::get('/ui-carousel', function () {
    return view('ui-carousel');
});

Route::get('/ui-scrollspy', function () {
    return view('ui-scrollspy');
});

Route::get('/ui-toasts', function () {
    return view('ui-toast');
});

Route::get('/ui-spinner', function () {
    return view('ui-spinner');
});

Route::get('/ui-cards', function () {
    return view('ui-cards');
});

Route::get('/authentication-login1', function () {
    return view('authentication-login1');
});

Route::get('/authentication-register1', function () {
    return view('authentication-register1');
});

Route::get('/icon-fontawesome', function () {
    return view('icon-fontawesome');
});

Route::get('/icon-simple-lineicon', function () {
    return view('icon-simple-lineicon');
});
















Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
