<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
  private $columns=['ClienName',
  'phone',
  'email',
  'website'
];
    /**
     * Display a listing of the resource.
     */

 public function showDeleted()
{
$trash = Client::onlyTrashed()->get();
return view('clientsTrash', compact('trash'));
}


public function restore(string $id)
{
Client::where('id', $id)->restore();
return redirect('Clients');
// return "Success";
}

public function forceDelete(Request $request)
{
    $id = $request->id;
Client::where('id', $id)->forceDelete();
return redirect('Clients');
}

    public function index()
    {
        $clients=Client::get();
        return view('clients',compact('clients'));
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
        // $client=new Client();
        // $client->ClienName=$request->input('ClienName');
        // $client->phone=$request->input('phone');
        // $client->email=$request->input('email');
        // $client->website=$request->input('website');
        // $client->save();
        //return'Data Inserted successully';
        $data=$request->validate([
            'ClienName'=>'required|max:100|min:11',
            'phone'=>'required|min:11',
            'email'=>'required|email:rfc',
            'website'=>'required',
        ]);
        //Client::create($request->only($this->columns));
        Client::create($data);
        return redirect('Clients');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return view('showClient',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view('editClients',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Client::where('id', $id)->update($request->only($this->columns));
              return redirect('Clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
Client::where('id', $id)->delete();
return redirect('Clients');
    }
}
