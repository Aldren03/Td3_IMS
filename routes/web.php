<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BorrowerController;

Route::get('/', [AdminController::class, 'home']);

route::get('/home', [AdminController::class, 'index'])->name('home');
Route::get('/index', [HomeController::class, 'index'])->name('index');



//Kay Employee
Route::get('/create_employee', [AdminController::class, 'create_employee'])->name('create_employee');
Route::post('/add_employee', [AdminController::class, 'add_employee'])->name('add_employee');
Route::get('/view_employee', [AdminController::class, 'view_employee'])->name('view_employee');
Route::get('/employee_delete/{id}', [AdminController::class, 'employee_delete'])->name('employee_delete');
Route::get('/update_employee/{id}', [AdminController::class, 'update_employee'])->name('update_employee');
Route::post('/edit_employee/{id}', [AdminController::class, 'edit_employee'])->name('edit_employee');

route::get('/view_user', [AdminController::class, 'view_user']);
route::get('/dashboard', [AdminController::class, 'dashboard']);

//Kay Borrower
Route::get('/add_borrower', [AdminController::class, 'show_add_borrower_form'])->name('add_borrower_form');
Route::post('/add_borrower', [AdminController::class, 'add_borrower'])->name('add_borrower');
Route::get('/borrowers', [AdminController::class, 'view_borrower'])->name('borrowers.view');
Route::get('/borrower_delete/{id}', [AdminController::class, 'borrower_delete'])->name('borrower_delete');
Route::get('/update_borrower/{id}', [AdminController::class, 'update_borrower'])->name('update_borrower');
Route::post('/edit_borrower/{id}', [AdminController::class, 'edit_borrower'])->name('edit_borrower');




Route::get('/index', [BorrowerController::class, 'index'])->name('index');

// Sa application form ni borrower
Route::get('/showForm', [BorrowerController::class, 'showForm'])->name('borrower.application.form');
Route::post('/borrower/submit-application', [BorrowerController::class, 'submitApplication'])->name('borrower.submitApplication');

// Application form na nakay admin
Route::get('/admin/pending-applications', [AdminController::class, 'showPendingApplications'])->name('admin.pending_applications');
Route::get('/admin/application/{id}', [AdminController::class, 'showApplication'])->name('application.show');
Route::post('/admin/application/{id}/approve', [AdminController::class, 'approveApplication'])->name('application.approve');
Route::post('/admin/application/{id}/reject', [AdminController::class, 'rejectApplication'])->name('application.reject');
Route::get('/admin/application-details', [AdminController::class, 'showApprovedApplications'])->name('admin.application_details');
Route::get('/admin/pending-applications', [AdminController::class, 'showPendingApplications'])->name('admin.pending_applications');
