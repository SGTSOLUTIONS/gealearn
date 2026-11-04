<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseModuleController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('admin');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/learning', [LearningController::class, 'index'])
    ->name('learning.index');

Route::get('/learning/{course}', [LearningController::class, 'showCourse'])
    ->name('learning.course');

Route::get('/learning/{course}/{lesson}', [LearningController::class, 'showLesson'])
    ->whereNumber('lesson')
    ->name('learning.lesson');
Route::post('/quizz', [LearningController::class, 'quizz']);

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin'])
    ->group(function () {

        // ── Courses ─────────────────────────────────────────────
        Route::get('/courses', [CourseController::class, 'index'])->name('course');
        Route::post('/course', [CourseController::class, 'store'])->name('course.store');
        Route::put('/course/{course}', [CourseController::class, 'update'])->name('course.update');
        Route::delete('/course/{course}', [CourseController::class, 'destroy'])->name('course.destroy');

        // ── Modules ─────────────────────────────────────────────
        Route::get('/modules', [CourseModuleController::class, 'index'])->name('modules');
        Route::post('/modules', [CourseModuleController::class, 'store'])->name('modules.store');
        Route::put('/modules/{module}', [CourseModuleController::class, 'update'])->name('modules.update');
        Route::delete('/modules/{module}', [CourseModuleController::class, 'destroy'])->name('modules.destroy');

        // ── Lessons ─────────────────────────────────────────────
        Route::get('/lessons', [LessonController::class, 'index'])->name('lessons.index');
        Route::post('/lessons', [LessonController::class, 'store'])->name('lessons.store');
        Route::get('/lessons/{lesson}', [LessonController::class, 'show'])->name('lessons.show');
        Route::put('/lessons/{lesson}', [LessonController::class, 'update'])->name('lessons.update');
        Route::delete('/lessons/{lesson}', [LessonController::class, 'destroy'])->name('lessons.destroy');

        // ── Quizzes ─────────────────────────────────────────────
        // Singular resource name → routes registered as admin.quiz.*

        Route::resource('quiz', QuizController::class)->names([
            'index'   => 'quiz.index',
            'create'  => 'quiz.create',
            'store'   => 'quiz.store',
            'show'    => 'quiz.show',
            'edit'    => 'quiz.edit',
            'update'  => 'quiz.update',
            'destroy' => 'quiz.destroy',
        ]);
    });
