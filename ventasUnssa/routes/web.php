
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$this->get('/', function () {
    return view('welcome');
})->name('/');

$this->get('/prueba', function () {
    return view('plantillas.tablaDetalle');
})->name('/');

Route::get('/reportes', function () {
    return view('pdf.reportePage');
});
Route::get('/ventas',  ['as' => 'ventas.ventas', 'uses' => 'ventasController@listaVentas']);
Route::get('/ventas{page?}',  ['as' => 'ventas.ventas', 'uses' => 'ventasController@listaVentas']);
Route::get('/delete/venta',  ['as' => 'ventas.ventas', 'uses' => 'ventasController@deleteVenta']);
Route::get('/detalle/venta',  ['as' => 'ventas.ventas', 'uses' => 'ventasController@detalleVenta']);
Route::get('/delete/detalle',  ['as' => 'ventas.ventas', 'uses' => 'ventasController@deleteDetalle']);
Route::post('/ventas',  ['as' => 'ventas.ventas', 'uses' => 'ventasController@registroVentas']);
Route::post('/ventas/update',  ['as' => 'ventas.ventas', 'uses' => 'ventasController@updateVentas']);
Route::get('crear_reporte_semana/{pdf}/{desde}/{hasta}', 'PdfController@crear_reporte_porsemana');
//Auth::routes();

        // Authentication Routes...
        $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\LoginController@login');
        $this->post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        $this->post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        $this->post('password/reset', 'Auth\ResetPasswordController@reset');

        
//Route::get('/home', 'HomeController@index')->name('home');
