<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Admin\ShowProducts;
use App\Http\Livewire\Admin\CreateProduct;
use App\Http\Livewire\Admin\EditProduct;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Livewire\Admin\ShowCategory;

use App\Http\Livewire\Admin\BrandComponent;

use App\Http\Livewire\Admin\DepartmentComponent;
use App\Http\Livewire\Admin\ShowDepartment;
use App\Http\Livewire\Admin\CityComponent;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Notifications;
use App\Http\Livewire\Admin\Orders;
use App\Http\Livewire\Admin\UserComponent;

Route::get('/products', ShowProducts::class)->name('admin.index');

Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');

Route::get('products/create', CreateProduct::class)->name('admin.products.create');

Route::get('products/{product}/edit', EditProduct::class)->name('admin.products.edit');
Route::post('products/{product}/files', [ProductController::class, 'files'])->name('admin.products.files');

Route::get('orders', Orders::class)->name('admin.orders.index');
Route::get('orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');

Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('categories/{category}', ShowCategory::class)->name('admin.categories.show');

Route::get('brands', BrandComponent::class)->name('admin.brands.index');

Route::get('departments', DepartmentComponent::class)->name('admin.departments.index');
Route::get('departments/{department}', ShowDepartment::class)->name('admin.departments.show');

Route::get('cities/{city}', CityComponent::class)->name('admin.cities.show');

Route::get('notifications', Notifications::class)->name('admin.notifications');

Route::get('users', UserComponent::class)->name('admin.users.index');