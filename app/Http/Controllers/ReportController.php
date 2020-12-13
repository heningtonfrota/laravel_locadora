<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movement;
use App\Models\Car;
use App\Models\Client;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cost_recipe_day()
    {
        $car = Car::all();
        $client = Client::all();

        $currentDay = date("Y-m-d");
        $movements = Movement::where('created_at', 'like', '%'.$currentDay.'%')->paginate(10);

        $costDay = Movement::where('created_at', 'like', '%'.$currentDay.'%')->sum('cost');
        $recipeDay = Movement::where('created_at', 'like', '%'.$currentDay.'%')->sum('recipe');
        $dailyBalance = $recipeDay - $costDay;
        //dd($currentDay, $movements, $costDay, $recipeDay);
        return view('reports.cost_recipe_day', compact('movements', 'costDay', 'recipeDay', 'dailyBalance', 'car', 'client'));
    }

    public function higher_revenue_vehicles()
    {
        $lastVehicle = Car::select('id')->orderByDesc('id')->limit(1)->value('id');
        $a = 1;
        $vehicle = 1;
        while ($a <= $lastVehicle) {
            $vehicles[Car::where('id', $a)->value('plate')] = Movement::where('car_id', $vehicle)->sum('recipe');
            $vehicle++;
            $a++;
        }
        arsort($vehicles);
        $position = 0;
        //dd($position);
        return view('reports.higher_revenue_vehicles', compact('vehicles', 'position'));
    }

    public function higher_cost_vehicles()
    {
        $lastVehicle = Car::select('id')->orderByDesc('id')->limit(1)->value('id');
        $a = 1;
        $vehicle = 1;
        while ($a <= $lastVehicle) {
            $vehicles[Car::where('id', $a)->value('plate')] = Movement::where('car_id', $vehicle)->sum('cost');
            $vehicle++;
            $a++;
        }
        arsort($vehicles);
        $position = 0;
        //dd($position);
        return view('reports.higher_cost_vehicles', compact('vehicles', 'position'));
    }

    public function most_rented_customers()
    {
        $lastVehicle = Car::select('id')->orderByDesc('id')->limit(1)->value('id');
        $a = 1;
        $vehicle = 1;
        while ($a <= $lastVehicle) {
            $vehicles[Client::where('id', $a)->value('name')] = Movement::where('client_id', $vehicle)->sum('car_id');
            $vehicle++;
            $a++;
        }
        arsort($vehicles);
        $position = 0;
        //dd($position);
        return view('reports.most_rented_customers', compact('vehicles', 'position'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
