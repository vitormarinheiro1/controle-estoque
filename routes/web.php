<?php

use App\Http\Controllers\MaquinaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Exports\MaquinasExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade;


Route::get('/', function () {
    return redirect('/dashboard');
})->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/maquinas', MaquinaController::class)->except(['show']);

    Route::get('/export-maquinas', function () {
        return Excel::download(new MaquinasExport, 'maquinas.xlsx');
    })->name('maquinas.export');

    Route::get('/export-maquinas-pdf', function () {
        $maquinas = App\Models\Maquina::all(); // Dados a serem exportados
        $pdf = Barryvdh\DomPDF\Facade\Pdf::loadView('maquinas.export-pdf', compact('maquinas'));
        return $pdf->download('maquinas.pdf');
    })->name('maquinas.export.pdf');

});



require __DIR__.'/auth.php';
