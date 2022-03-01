<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('skills', fn() => ['Laravel', 'PHP', 'Vue', 'Javascript', 'Tooling']);

Route::controller(ProjectsController::class)->prefix('projects')->group(function (){
    Route::get('create', 'create');
    Route::post('', 'store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
