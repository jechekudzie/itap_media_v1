<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LineItemController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PackageLineItemController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [SiteController::class,'index']);
Route::get('/services', [SiteController::class,'services']);
Route::get('/service/categories', [SiteController::class,'service_categories']);
Route::get('/category/packages', [SiteController::class,'category_packages']);

Route::get('/admin', function () {
    notify()->success('Laravel Notify is awesome!');
    return view('admin.index');
});


/*
|--------------------------------------------------------------------------
| Administration Routes
|--------------------------------------------------------------------------
*/
Route::resource('/admin/services', ServiceController::class);
// Routes for ServiceController
Route::get('/admin/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/admin/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/admin/services/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/admin/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/admin/services/{service}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/admin/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');

// Routes for CategoryController
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/admin/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');


// Routes for LineItemController
Route::get('/admin/line_items/index/{category}', [LineItemController::class, 'index'])->name('line_items.index');
Route::get('/admin/line_items/create/{category}', [LineItemController::class, 'create'])->name('line_items.create');
Route::post('/admin/line_items/store', [LineItemController::class, 'store'])->name('line_items.store');
Route::get('/admin/line_items/{lineItem}', [LineItemController::class, 'show'])->name('line_items.show');
Route::get('/admin/line_items/{lineItem}/edit', [LineItemController::class, 'edit'])->name('line_items.edit');
Route::put('/admin/line_items/{lineItem}', [LineItemController::class, 'update'])->name('line_items.update');
Route::delete('/admin/line_items/{lineItem}', [LineItemController::class, 'destroy'])->name('line_items.destroy');


// Routes for PackageController
Route::get('/admin/packages/create/{service}', [PackageController::class, 'create'])->name('packages.create');
Route::post('/admin/packages', [PackageController::class, 'store'])->name('packages.store');
Route::get('/admin/packages/{package}', [PackageController::class, 'show'])->name('packages.show');
Route::get('/admin/packages/{package}/edit', [PackageController::class, 'edit'])->name('packages.edit');
Route::put('/admin/packages/{package}', [PackageController::class, 'update'])->name('packages.update');
Route::delete('/admin/packages/{package}', [PackageController::class, 'destroy'])->name('packages.destroy');



// Routes for PackageLineItemController
Route::get('/admin/packages/{package}/line-items/create', [PackageLineItemController::class, 'create'])->name('packages.line-items.create');
Route::post('/admin/packages/{package}/line-items', [PackageLineItemController::class, 'store'])->name('packages.line-items.store');
Route::get('/admin/packages/{package}/line-items/{lineItem}/edit', [PackageLineItemController::class, 'edit'])->name('packages.line-items.edit');
Route::put('/admin/packages/{package}/line-items/{lineItem}', [PackageLineItemController::class, 'update'])->name('packages.line-items.update');
Route::delete('/admin/packages/{package}/line-items/{lineItem}', [PackageLineItemController::class, 'destroy'])->name('packages.line-items.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
