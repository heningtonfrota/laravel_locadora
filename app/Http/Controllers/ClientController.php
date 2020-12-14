<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Movement;

class ClientController extends Controller
{
    private $client;

    public function __construct (Client $client)
    {
       $this->client = $client;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lastVehicle = Client::select('id')->orderByDesc('id')->limit(1)->value('id');
        $a = 1;
        $vehicle = 1;
        while ($a <= $lastVehicle) {
            $vehicles[Client::where('id', $a)->value('id')] = Movement::where('client_id', $vehicle)->count();
            $vehicle++;
            $a++;
        }
        // dd($vehicles);
        //
        $clients = client::all();
        // $movements = Movement::where('client_id', 3)->count();
        // dd($movements);
        return view('clients.index', compact('clients', 'vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clients = client::all();
        $data = $request->all();
	      $client = $this->client->create($data);
        return redirect()->route('clients.index', compact('clients'));
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
    public function edit($client)
    {
        $client = \App\Models\Client::find($client);
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $client)
    {
        $data = $request->all();
        $client = \App\Models\Client::find($client);
        $client->update($data);
        return redirect()->route('clients.edit', ['client' =>$client->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($client)
    {
      $client = \App\Models\Client::find($client);
      $client->delete();
      return redirect()->route('clients.index');
    }
}
