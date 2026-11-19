<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\StuinfController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnrollmentController;

Route::get('/', function () {
    return redirect('/signup');
});

// Sign Up page
Route::get('/signup', function () {
    return view('signup');
});

// Receive Sign Up data
Route::post('/signup', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'password' => 'required|min:4',
    ]);

    session([
        'signup_name' => $request->name,
        'signup_email' => $request->email,
        'signup_password' => $request->password,
    ]);

    return redirect('/signin');
});

// Sign In page
Route::get('/signin', function () {
    return view('signin', [
        'email' => session('signup_email', ''),
    ]);
});

// Check Sign In information
Route::post('/signin', function (Request $request) {
    if (
        $request->email === session('signup_email') &&
        $request->password === session('signup_password')
    ) {
        return redirect('/page');
    }

    return back()->withErrors([
        'login' => 'Wrong email or password!',
    ]);
});

// Final page
Route::get('/page', function () {
    if (!session()->has('signup_email')) {
        return redirect('/signup');
    }

    return view('page', [
        'email' => session('signup_email'),
    ]);
});

// Sign Out
Route::post('/signout', function () {
    session()->flush();

    return redirect('/signin');
});

// Students Routes
Route::get('/students', [StuinfController::class, 'index'])
    ->name('students.index');
Route::get('/students/create', [StuinfController::class, 'create']);

Route::delete('/students/{id}', [StuinfController::class, 'destroy'])
    ->name('students.destroy');

Route::post('/students', [StuinfController::class, 'store']);

// Edit Student
Route::get('/students/{id}/edit', [StuinfController::class, 'edit']);

// Update Student
Route::put('/students/{id}', [StuinfController::class, 'update']);

// Courses Routes
Route::get('/courses', [CourseController::class, 'index']);

Route::get('/courses/create', [CourseController::class, 'create']);

Route::post('/courses', [CourseController::class, 'store']);
// Admin Routes

// Display Admin Login Page
Route::get('/admin/login',
    [AdminController::class, 'showLogin']
)->name('admin.login');

// Receive Admin Login Data
Route::post('/admin/login',
    [AdminController::class, 'login']
)->name('admin.login.submit');

// Admin Dashboard
Route::get('/admin/dashboard',
    [AdminController::class, 'dashboard']
)->name('admin.dashboard');

// Admin Logout
Route::post('/admin/logout',
    [AdminController::class, 'logout']
)->name('admin.logout');

// Enrollment Routes

Route::get('/enrollments', [EnrollmentController::class, 'create'])
    ->name('enrollments.create');

Route::post('/enrollments', [EnrollmentController::class, 'store'])
    ->name('enrollments.store');
Route::get('/enrollments/list', [EnrollmentController::class, 'index'])
    ->name('enrollments.index');
Route::get('/enrollments/student/{id}', [EnrollmentController::class, 'studentCourses'])
    ->name('enrollments.student');