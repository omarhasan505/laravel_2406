<?php

use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\Backend\Product\ProductController;
use App\Http\Controllers\Backend\Relation\RelationController;
use App\Http\Controllers\Backend\RolePermission\RolePermissionController;
use App\Http\Controllers\Frontend\AddToCartController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Models\Category\Category;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Route;






Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//*  BACKEND PART

Route::prefix('/dashboard/rolePermission')->name('rolePermission.')->middleware(['auth' ,'verified',])->group(function(){
    Route::get('/createUser' , [RolePermissionController::class, 'createUser'])->name('create.user');
    Route::post('/createUser' , [RolePermissionController::class, 'storeUser'])->name('store.user');
    Route::get('/userlist' , [RolePermissionController::class, 'listUser'])->name('list.user');
    Route::get('/deletuser/{id}' , [RolePermissionController::class, 'deletUser'])->name('delet.user');
    Route::get('/editUser/{id}' , [RolePermissionController::class, 'editUser'])->name('edit.user');
    Route::put('/updateUser/{id}' , [RolePermissionController::class, 'updateUser'])->name('update.user');
    Route::get('/createRole' , [RolePermissionController::class, 'createRole'])->name('create.role');
    Route::post('/createRole' , [RolePermissionController::class, 'storeRole'])->name('store.role');
    Route::get('/roleList' , [RolePermissionController::class, 'roleList'])->name('list.role');
    Route::get('/userRole/{id}' , [RolePermissionController::class, 'userRole'])->name('user.role');
    Route::post('/userRole' , [RolePermissionController::class, 'userRoleStore'])->name('user.role.store');
    Route::get('/userRoleList' , [RolePermissionController::class, 'userRoleList'])->name('user.role.list');
    Route::get('/permissionList/{id}' , [RolePermissionController::class, 'permissionList'])->name('user.permission.list');
    Route::post('/permissionList' , [RolePermissionController::class, 'permissionListStore'])->name('user.permission.store');
});

Route::prefix('/dashboard/products')->name('products.')->middleware(['auth', 'verified',])->group(
    function () {

    Route::get('/addProduct' , [ProductController::class , 'storeProduct'])->name('product.store');
    Route::post('/addProduct' , [ProductController::class , 'storeProductList'])->name('product.list.store');
    Route::get('/productList' , [ProductController::class , 'productList'])->name('product.list');
    Route::get('/editProduct/{id}' , [ProductController::class , 'editProduct'])->name('product.edit');
    Route::put('/editProduct/{id}' , [ProductController::class , 'storeEditProduct'])->name('store.product.edit');
    Route::get('/deleteProduct/{id}' , [ProductController::class , 'deleteProduct'])->name('product.delete');
    Route::get('/productImage' , [ProductController::class , 'productImage'])->name('product.image');
    Route::post('/storeProductImage' , [ProductController::class , 'storeProductImage'])->name('store.product.image');
    Route::get('/showProductImage' , [ProductController::class , 'showProductImage'])->name('show.product.image');
    Route::get('/editProductImage/{id}' , [ProductController::class , 'editProductImage'])->name('edit.product.image');
    Route::get('/deletEditProductImage/{id}' , [ProductController::class , 'deletEditProductImage'])->name('delet.edit.product.image');
    Route::put('/updateProductImage/{id}' , [ProductController::class , 'updateProductImage'])->name('update.product.image');
    Route::get('/deleteProductImage/{id}' , [ProductController::class , 'deleteProductImage'])->name('delete.product.image');

});

Route::middleware(['auth'])->group(function () {

    // Profile page
    Route::get('/profile', [ProfileController::class, 'index'])
        ->name('profile');

    // Update avatar
    Route::post('/profile/avatar', [ProfileController::class, 'updateAvatar'])
        ->name('profile.update.avatar');

    // Update profile info
    Route::post('/profile/info', [ProfileController::class, 'updateInfo'])
        ->name('profile.update.info');

    // Update password
    Route::post('/profile/password', [ProfileController::class, 'updatePassword'])
        ->name('profile.update.password');
});

Route::prefix('/dashboard/orm')->name('orm.')->middleware(['auth' , 'verified'])->group(function(){






    Route::get('/oneToOne' , [RelationController::class , 'index'])->name('oto.relation');
    Route::get('/oneToMany' , [RelationController::class , 'indexMany'])->name('otm.relation');
    Route::get('/manyToMany' , [RelationController::class , 'manyToMany'])->name('mtm.relation');
    Route::get('/hasOneThrough' , [RelationController::class , 'hasOneThrough'])->name('hot.relation');

});

Route::prefix('/dashboard/categories')->name('category.')->middleware(['auth' , 'verified'])->group(function(){

    Route::get('/selectCategory' , [CategoryController::class , 'categoryIndex'])->name('select.category');
    Route::post('/storeCategory' , [CategoryController::class , 'categoryStore'])->name('store.category');
    Route::get('/categoryList' , [CategoryController::class , 'categorylist'])->name('list.category');
    Route::get('/categoryEdit/{id}' , [CategoryController::class , 'categoryEdit'])->name('edit.category');
    Route::put('/storeEditCategory/{id}' , [CategoryController::class , 'storeEditCategory'])->name('store.edit.category');
    Route::get('/categoryDelete/{id}' , [CategoryController::class , 'categoryDelete'])->name('delete.category');


});




//* FORNTEND PART

Route::name('frontend.')->group(function(){
    Route::get('/' , [FrontendController::class, 'index'])->name('featured');
    Route::get('/addToCart/{id}' , [AddToCartController::class, 'addToCart'])->name('addToCart');
    Route::get('/deletCart/{id}' , [AddToCartController::class, 'deletCart'])->name('deletCart');
});




require __DIR__.'/auth.php';
