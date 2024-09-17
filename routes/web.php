<?php
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\promote\PromoteController;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [PromoteController::class, 'index'])->name('promote.index');
Route::get('menu', [PromoteController::class, 'menu'])->name('promote.menu');
Route::get('gallery', [PromoteController::class, 'gallery'])->name('promote.gallery');
Route::get('about', [PromoteController::class, 'about'])->name('promote.about');
Route::get('contact', [PromoteController::class, 'contact'])->name('promote.contact');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {

    $c = Category::all();
    $p = Product::all();
    $u = User::all();

    return view('dashboard',compact('c','p','u'));

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//หน้า User
Route::get('admin/user/index',[UserController::class, 'index'])->name('a.index');

//หน้า Category
Route::get('admin/category/index',[CategoryController::class, 'index'])->name('b.index');
Route::get('admin/category/create',[CategoryController::class, 'create'])->name('b.create');
Route::post('admin/category/insert',[CategoryController::class, 'insert']);
Route::get('admin/category/edit/{id}',[CategoryController::class, 'edit']);
Route::post('admin/category/update/{id}',[CategoryController::class, 'update']);
Route::get('admin/category/delete/{id}',[CategoryController::class, 'delete']);

//หน้า Product
Route::get('admin/product/index',[ProductController::class, 'index'])->name('c.index');
Route::get('admin/product/create',[ProductController::class, 'create'])->name('c.create');
Route::post('admin/product/insert',[ProductController::class, 'insert']);
Route::get('admin/product/edit/{id}',[ProductController::class,'edit'])->name('p.edit');
Route::post('admin/product/update/{id}',[ProductController::class, 'update']);
Route::get('admin/product/delete/{id}',[ProductController::class, 'delete']);
