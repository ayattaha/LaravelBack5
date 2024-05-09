<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formdisplay');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client=new Client();
        $client->ClienName=$request->input('ClienName');
        $client->phone=$request->input('phone');
        $client->email=$request->input('email');
        $client->website=$request->input('website');
        $client->save();
        return'Data Inserted successully';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}