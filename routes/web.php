
<?php

use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseModuleController;
use App\Http\Controllers\LearningController;

Route::middleware('guest')->group(function () {

    // Login page
    Route::get('/login', [
        AuthController::class,
        'showLogin'
    ])->name('login');

    // AJAX login
    Route::post('/login', [
        AuthController::class,
        'login'
    ])->name('login.submit');

    // Register page
    Route::get('/register', [
        AuthController::class,
        'showRegister'
    ])->name('register');

    // AJAX registration
    Route::post('/register', [
        AuthController::class,
        'register'
    ])->name('register.submit');

});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', [
        AuthController::class,
        'logout'
    ])->name('logout');


});
Route::get('/learning', [LearningController::class, 'index'])->name('learning.index');
Route::get('/learning/{course}', [LearningController::class, 'showCourse'])->name('learning.course');
Route::get('/learning/{course}/{lesson}', [LearningController::class, 'showLesson'])->name('learning.lesson');
Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {

        // Courses
        Route::get('/courses', [CourseController::class, 'index'])
            ->name('course');

        Route::post('/course', [CourseController::class, 'store'])
            ->name('course.store');

        Route::put('/course/{course}', [CourseController::class, 'update'])
            ->name('course.update');

        Route::delete('/course/{course}', [CourseController::class, 'destroy'])
            ->name('course.destroy');


        // Modules
        Route::get('/modules', [CourseModuleController::class, 'index'])
            ->name('modules');

        Route::post('/modules', [CourseModuleController::class, 'store'])
            ->name('modules.store');

        Route::put('/modules/{module}', [CourseModuleController::class, 'update'])
            ->name('modules.update');

        Route::delete('/modules/{module}', [CourseModuleController::class, 'destroy'])
            ->name('modules.destroy');


      // INDEX
    Route::get('/lessons', [LessonController::class, 'index'])->name('lessons.index');

    // STORE
    Route::post('/lessons', [LessonController::class, 'store'])->name('lessons.store');

    // SHOW (For Edit AJAX)
    Route::get('/lessons/{lesson}', [LessonController::class, 'show'])->name('lessons.show');

    // UPDATE
    Route::put('/lessons/{lesson}', [LessonController::class, 'update'])->name('lessons.update');

    // DESTROY
    Route::delete('/lessons/{lesson}', [LessonController::class, 'destroy'])->name('lessons.destroy');

        // Quizzes
        // Route::get('/quizzes', [QuizController::class, 'index'])
        //     ->name('quizzes');

        // Route::post('/quizzes', [QuizController::class, 'store'])
        //     ->name('quizzes.store');

        // Route::get('/quizzes/{quiz}/edit', [QuizController::class, 'edit'])
        //     ->name('quizzes.edit');

        // Route::put('/quizzes/{quiz}', [QuizController::class, 'update'])
        //     ->name('quizzes.update');

        // Route::delete('/quizzes/{quiz}', [QuizController::class, 'destroy'])
        //     ->name('quizzes.destroy');

    });
