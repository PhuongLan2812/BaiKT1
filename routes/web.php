<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'employees'], function () {
    Route::get('/', [EmployeeController::class, 'getAllEmployees'])->name('employees.getAllEmployees');
    Route::get('/add', [EmployeeController::class, 'addEmployee'])->name('employees.addEmployee');
    Route::post('saveEmployee', [EmployeeController::class, 'saveEmployee'])->name('employees.saveEmployee');
    Route::get('/edit/{id}', [EmployeeController::class, 'editEmployee'])->name('employees.editEmployee');
    Route::get('/show/{id}', [EmployeeController::class, 'showEmployee'])->name('employees.showEmployee');
    Route::put('/update/{id}', [EmployeeController::class, 'updateEmployee'])->name('employees.updateEmployee');
    Route::get('/delete/{id}', [EmployeeController::class, 'deleteEmployee'])->name('employees.deleteEmployee');
});