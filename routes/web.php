<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\InvoiceDetailsController;
use App\Http\Controllers\BillController;


Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


//Muestra una tabla con todas sus categorias
Route::get('/categories',[CategoryController::class, 'index'])
->name('categories.index');


//Muestra el formulario pero crea una categoria
Route::get('/categories/create',[CategoryController::class, 'create'])
->name('categories.create');


//Recibe los datos del formulario para crear una categoria
Route::post('/categories/create',[CategoryController::class, 'store'])
->name('categories.create');

//Muestra un formulario para editar una categoria
Route::get('/categories/edit/{category}',[CategoryController::class, 'edit'])
->name('categories.edit');

//Recibe los datos del formulario para editar una categoria
Route::post('/categories/edit/{category}',[CategoryController::class, 'update'])
->name('categories.edit');

//Elimina una categoria por el id
Route::post('/categories/delete/{category}',[CategoryController::class, 'destroy'])
->name('categories.delete');




//PRODUCTS

// Muestra una  tabla con todos los productos
Route::get('/products',[ProductController::class, 'index'])
->name('products.index');

//Muestra un formulario para crear un producto
Route::get('/products/create',[ProductController::class, 'create'])
->name('products.create');

//Recibe los datos del formulario para crear un producto
Route::post('/products/create',[ProductController::class, 'store'])
->name('products.create');

//Muestra un formulario para editar una producto
Route::get('/products/edit/{product}',[ProductController::class, 'edit'])
->name('products.edit');

//Recibe los datos de un formulario para editar un producto
Route::post('/products/edit/{product}',[ProductController::class, 'update'])
->name('products.edit');

//Elimina un producto por el id
Route::post('/products/delete/{product}',[ProductController::class, 'destroy'])
->name('products.delete');


//departments
// Muestra un tabla con todas las departments
Route::get('/departments', [DepartmentController::class, 'index'])
->name('departments.index');

// Muestra un formulario para crear una categoria
Route::get('/departments/create', [DepartmentController::class, 'create'])
->name('departments.create');

// Recibe los datos del formulario para crear una categoria
Route::post('/departments/create', [DepartmentController::class, 'store'])
->name('departments.create');

// Muestra un fomrulario para editar una categoria
Route::get('/departments/edit/{department}', [DepartmentController::class, 'edit'])
->name('departments.edit');


// Recibe los datos del formulario para crear una categoria
Route::post('/departments/edit/{department}', [DepartmentController::class, 'update'])
->name('departments.edit');

// Muestra una departments por el id
Route::post('/departments/delete/{department}', [DepartmentController::class, 'destroy'])
->name('departments.delete');

//cities
// Muestra un tabla con todas las cities
Route::get('/cities', [CityController::class, 'index'])
->name('cities.index');

// Muestra un formulario para crear una cities
Route::get('/cities/create', [CityController::class, 'create'])
->name('cities.create');

// Recibe los datos del formulario para crear una cities
Route::post('/cities/create', [CityController::class, 'store'])
->name('cities.create');

// Muestra un fomrulario para editar una cities
Route::get('/cities/edit/{city}', [CityController::class, 'edit'])
->name('cities.edit');


// Recibe los datos del formulario para crear una cities
Route::post('/cities/edit/{city}', [CityController::class, 'update'])
->name('cities.edit');

// Muestra una cities por el id
Route::post('/cities/delete/{city}', [CityController::class, 'destroy'])
->name('cities.delete');


//employees
// Muestra un tabla con todas las employees
Route::get('/employees', [EmployeeController::class, 'index'])
->name('employees.index');

// Muestra un formulario para crear una employees
Route::get('/employees/create', [EmployeeController::class, 'create'])
->name('employees.create');

// Recibe los datos del formulario para crear una employees
Route::post('/employees/create', [EmployeeController::class, 'store'])
->name('employees.create');

// Muestra un fomrulario para editar una employees
Route::get('/employees/edit/{employee}', [EmployeeController::class, 'edit'])
->name('employees.edit');


// Recibe los datos del formulario para crear una employees
Route::post('/employees/edit/{employee}', [EmployeeController::class, 'update'])
->name('employees.edit');

// Muestra una employees por el id
Route::post('/employees/delete/{employee}', [EmployeeController::class, 'destroy'])
->name('employees.delete');


//clients
// Muestra un tabla con todas las clients
Route::get('/clients', [ClientController::class, 'index'])
->name('clients.index');

// Muestra un formulario para crear una clients
Route::get('/clients/create', [ClientController::class, 'create'])
->name('clients.create');

// Recibe los datos del formulario para crear una clients
Route::post('/clients/create', [ClientController::class, 'store'])
->name('clients.create');

// Muestra un fomrulario para editar una clients
Route::get('/clients/edit/{client}', [ClientController::class, 'edit'])
->name('clients.edit');

// Recibe los datos del formulario para crear una clients
Route::post('/clients/edit/{client}', [ClientController::class, 'update'])
->name('clients.edit');

// Muestra una clients por el id
Route::post('/clients/delete/{client}', [ClientController::class, 'destroy'])
->name('clients.delete');



//providers
// Muestra un tabla con todas las providers
Route::get('/providers', [ProviderController::class, 'index'])
->name('providers.index');

// Muestra un formulario para crear una providers
Route::get('/providers/create', [ProviderController::class, 'create'])
->name('providers.create');

// Recibe los datos del formulario para crear una providers
Route::post('/providers/create', [ProviderController::class, 'store'])
->name('providers.create');

// Muestra un fomrulario para editar una providers
Route::get('/providers/edit/{provider}', [ProviderController::class, 'edit'])
->name('providers.edit');

// Recibe los datos del formulario para crear una providers
Route::post('/providers/edit/{provider}', [ProviderController::class, 'update'])
->name('providers.edit');

// Muestra una providers por el id
Route::post('/providers/delete/{provider}', [ProviderController::class, 'destroy'])
->name('providers.delete');



//PRODUCTS

// Muestra una  tabla con todos los productos
Route::get('/bills',[BillController::class, 'index'])
->name('bills.index');

//Muestra un formulario para crear un producto
Route::get('/bills/create',[BillController::class, 'create'])
->name('bills.create');

//Recibe los datos del formulario para crear un producto
Route::post('/bills/create',[BillController::class, 'store'])
->name('bills.create');

//Muestra un formulario para editar una producto
Route::get('/bills/edit/{bill}',[BillController::class, 'edit'])
->name('bills.edit');

//Recibe los datos de un formulario para editar un producto
Route::post('/bills/edit/{bill}',[BillController::class, 'update'])
->name('bills.edit');

//Elimina un producto por el id
Route::post('/bills/delete/{bill}',[BillController::class, 'destroy'])
->name('bills.delete');


//INVOICE DETAILS

// Muestra una  tabla con todos los productos
Route::get('/invoiceDetails',[InvoiceDetailsController::class, 'index'])
->name('invoiceDetails.index');

//Muestra un formulario para crear un producto
Route::get('/invoiceDetails/create',[InvoiceDetailsController::class, 'create'])
->name('invoiceDetails.create');

//Recibe los datos del formulario para crear un producto
Route::post('/invoiceDetails/create',[InvoiceDetailsController::class, 'store'])
->name('invoiceDetails.create');

//Muestra un formulario para editar una producto
Route::get('/invoiceDetails/edit/{invoiceDetails}',[InvoiceDetailsController::class, 'edit'])
->name('invoiceDetails.edit');

//Recibe los datos de un formulario para editar un producto
Route::post('/invoiceDetails/edit/{invoiceDetails}',[InvoiceDetailsController::class, 'update'])
->name('invoiceDetails.edit');

//Elimina un producto por el id
Route::post('/invoiceDetails/delete/{invoiceDetails}',[InvoiceDetailsController::class, 'destroy'])
->name('invoiceDetails.delete');


Route::get('/', function () {
    return view('welcome');
});
