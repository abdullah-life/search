<?php

use App\Http\Controllers\ProfileController;
use App\Models\Entry;
use App\Models\Test;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Spatie\QueryBuilder\QueryBuilder;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {

    $model = User::class;

    $available_columns = Schema::getColumnListing(app($model)->getTable());

    $users = QueryBuilder::for($model)
        ->allowedFilters(['name'])
        ->paginate(request()->perPage ?? 15)
        ->appends(request()->query());

    $columns = collect($available_columns)->map(function ($c) {
        return [
            'name' => str($c)->headline()->upper(),
            'sortable' => false,
            'filterable' => false,
            'searchable' => false,
            'type' => 'text'
        ];
    });

    $users = collect($users);

    $users->prepend($columns, 'columns');


    return Inertia::render('Dashboard', ['users' => $users]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
