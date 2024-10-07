<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\OrdersController;


Route::get('/', function () {
    return view('welcome');
});

// Protected Routes with Middleware
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Customer Routes
    Route::get('/customer', [CustomerController::class, 'index']);
    Route::post('/customer/registration', [CustomerController::class, 'store'])->name('customer.save');

    // Inventory Routes
    Route::get('/inventory', [InventoryController::class, 'index']);
    Route::post('/inventory/registration', [InventoryController::class, 'store'])->name('item.save');

    // Attendance Routes
    Route::get('/attendance', [AttendanceController::class, 'index']);
    Route::post('/attendance/registration', [AttendanceController::class, 'store'])->name('attendance.save');

    // Logs Routes
    Route::get('/logs', [LogsController::class, 'index']);
    Route::post('/logs/registration', [LogsController::class, 'store'])->name('logs.save');

    // Project Routes
    Route::get('/project', [ProjectController::class, 'index']);
    Route::post('/project/registration', [ProjectController::class, 'store'])->name('project.save');

    // Tasks Routes
    Route::get('/tasks', [TasksController::class, 'index']);
    Route::post('/tasks/registration', [TasksController::class, 'store'])->name('tasks.save');

    // Departments Routes
    Route::get('/departments', [DepartmentsController::class, 'index']);
    Route::post('/departments/registration', [DepartmentsController::class, 'store'])->name('departments.save');

     // Expenses Routes
     Route::get('/expenses', [ExpensesController::class, 'index']);
     Route::post('/expenses/registration', [ExpensesController::class, 'store'])->name('expenses.save');

      // Client Routes
      Route::get('/client', [ClientController::class, 'index']);
      Route::post('/client/registration', [ClientController::class, 'store'])->name('clients.save');

      // Events Routes
      Route::get('/events', [EventsController::class, 'index']);
      Route::post('/events/registration', [EventsController::class, 'store'])->name('events.save');

      // Orders Routes
      Route::get('/orders', [OrdersController::class, 'index']);
      Route::post('/orders/registration', [OrdersController::class, 'store'])->name('orders.save');
});
