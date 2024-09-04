<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddmissionController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PresceiptionController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\UserController;
use App\Models\Appointment;

Route::get('/', [HomeController::class, 'index']);
Route::post('/',[HomeController::class, 'store_app'])->name('store_app');


Route::resources([
     
    'patients'=> PatientController::class,
    'doctors'=> DoctorController::class,
    'departments'=> DepartmentController::class,
    'appointments'=> AppointmentController::class,
    'medicines'=> MedicineController::class,
    'bills'=> BillController::class,
    'presceiptions'=> PresceiptionController::class,
    'users'=> UserController::class,
    'seats' => SeatController::class,
    'treatments' => TreatmentController::class,
    'addmissions' => AddmissionController::class,
    'presceiptions' => PresceiptionController::class,
]);
Auth::routes();
// Dashboard.........
Route::get('/dashboard', [ App\Http\Controllers\HomeController::class, 'index'])->name('Dashboard');

Route::post('appointment/{id}', [AppointmentController::class, 'approve'])->name('approved');
Route::post('seat/{id}', [SeatController::class, 'booked'])->name('seat_book');

// addmission....
Route::post('addmission.admit ', [AddmissionController::class, 'admit '])->name('addmission.admit');
 