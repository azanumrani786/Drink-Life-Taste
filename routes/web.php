<?php

use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrickOwlController;
use App\Http\Controllers\DispatcherController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Mpdf\Mpdf;
use App\Models\Product;
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

// Agent login routes
Route::get('/agent/login', [AuthenticatedSessionController::class, 'showAgentLoginForm'])->name('agent.login');
Route::post('/agent/login', [AuthenticatedSessionController::class, 'agentLogin']);

// Dispatcher login routes
Route::get('/distributors/login', [AuthenticatedSessionController::class, 'showDispatcherLoginForm'])->name('dispatcher.login');
Route::post('/distributors/login', [AuthenticatedSessionController::class, 'dispatcherLogin']);

Route::get('/', function () {
    $products = \App\Models\Product::all();
    return view('welcome',compact('products'));
});
Route::get('/', [HomeController::class, 'index'])->name('index');
// frontend routes 
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about_us');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('/ambassadors', [HomeController::class, 'ambassadors'])->name('ambassadors');
Route::get('/fitness', [HomeController::class, 'fitness'])->name('fitness');
Route::get('/detail', [HomeController::class, 'detail'])->name('detail');
// products routes
Route::get('/single_product', [HomeController::class, 'single_product'])->name('single_product');
Route::get('/details/{id}', [HomeController::class, 'details'])->name('details');
Route::get('/variant', [HomeController::class, 'variant'])->name('variant');
Route::get('/nutrition', [HomeController::class, 'nutrition'])->name('nutrition');
// pages routes
Route::get('/green_team', [HomeController::class, 'our_client'])->name('our_client');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
// blog routes
Route::get('/blogs', [HomeController::class, 'blog_single'])->name('blog-single');

// Route::get('/products/pdf', [ProductController::class, 'generatePDF'])->name('productspdf');
Route::get('/products/pdf', function () {
    $products = Product::all(); // Fetch all products from the database

    // Create a new instance of Mpdf
    $mpdf = new Mpdf();

    // Begin writing the HTML content
    $html = '<h1>Product Lists</h1>';
    $html .= '<table border="1" cellpadding="10" cellspacing="0" style="width: 100%;">';
    $html .= '<thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
              </thead>
              <tbody>';

    foreach ($products as $key => $product) {
        $keys = $key + 1;
        $html .= '<tr>
                    <td>' . $keys . '</td>
                    <td>' . $product->name . '</td>
                    <td>' . $product->price . '</td>
                    <td>' . $product->description . '</td>
                  </tr>';
    }

    $html .= '</tbody></table>';

    // Write HTML to the PDF
    $mpdf->WriteHTML($html);

    // Output the PDF as a download
    return $mpdf->Output('products.pdf', 'D');
})->name('productspdf');

Route::post('/set-language', [LanguageController::class, 'setLanguage'])->name('set.language');


Auth::routes();

// frontend routes
Route::get('/', [HomeController::class, 'main'])->name('main');
// end frontend routes

// user routes
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('is_user');
// end user routes


// admin routes
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/inventory', [BrickOwlController::class, 'getInventoryList'])->middleware('is_admin');
Route::resource('products', ProductController::class)->middleware('is_admin');
Route::resource('agents', AgentController::class)->middleware('is_admin');
Route::resource('dispatchers', DispatcherController::class)->middleware('is_admin');
// Agent route
Route::get('agent/home', [HomeController::class, 'agentHome'])->name('agent.home')->middleware('is_agent');

// Dispatcher route
Route::get('dispatcher/home', [HomeController::class, 'dispatcherHome'])->name('dispatcher.home')->middleware('is_dispatcher');
// end admin routes



