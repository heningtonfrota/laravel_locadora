<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MovementController;
use App\Http\Controllers\ReportController;

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

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::resource('cars', CarController::class);
Route::resource('clients', ClientController::class);
Route::resource('movements', MovementController::class);
Route::get('reports/relatorio-custo-receita-diario', [ReportController::class, 'cost_recipe_day'])->name('reports.cost_recipe_day');
Route::get('reports/veiculos-de-maior-receita', [ReportController::class, 'higher_revenue_vehicles'])->name('reports.higher_revenue_vehicles');
Route::get('reports/veiculos-de-maior-custo', [ReportController::class, 'higher_cost_vehicles'])->name('reports.higher_cost_vehicles');
Route::get('reports/clientes-que-mais-alugaram', [ReportController::class, 'most_rented_customers'])->name('reports.most_rented_customers');
