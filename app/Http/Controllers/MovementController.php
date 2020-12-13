<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movement;
use App\Models\Car;
use App\Models\Client;

class MovementController extends Controller
{
    private $movement;
    private $car;
    private $client;

    public function __construct (Movement $movement, Car $car, Client $client)
    {
       $this->movement = $movement;
       $this->car = $car;
       $this->client = $client;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $movements = Movement::orderBy('id', 'DESC')->paginate(10);
      $car = Car::all();
      $client = Client::all();
      //dd($client->find(1)->name);
      return view('movements.index', compact('movements', 'car', 'client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $cars = Car::all();
        return view('movements.create', compact('clients', 'cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        if (isset($request->car_id) || isset($request->cost) || isset($request->recipe)) {
            $clients = client::all();
            $cars = Car::all();

            $data = $request->all();
    	      $movement = $this->movement->create($data);

            return redirect()->route('movements.index', compact('cars', 'clients'));
        } else {
           return redirect()->back();
        }

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
    public function edit($movement)
    {
        $clients = Client::all();
        $cars = Car::all();

        $movement = \App\Models\Movement::find($movement);
        return view('movements.edit', compact('movement', 'cars', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $movement)
    {
        $data = $request->all();
        // dd($data);
        $movement = \App\Models\Movement::find($movement);
        $movement->update($data);
        return redirect()->route('movements.edit', ['movement' =>$movement->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($movement)
    {
        $movement = \App\Models\Movement::find($movement);
        $movement->delete();
        return redirect()->route('movements.index');
    }
}
