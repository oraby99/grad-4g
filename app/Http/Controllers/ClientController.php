<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
  {
    if(Auth::user()->email == 'admin@admin.com')
    {
      $clients = Client::all();
    }
    else
    {
     $clients = Auth::user()->client;
    }
    // select('id' ,'name' ,'nationalid' ,'address','phone' )
    //   ->orderBy('id','DESC')
    //   ->paginate(4);
      // $clients = Client::all();
      return view('clients/index',
      [
        'clients'=>$clients
      ]);
 
  }
  public function show( $client )
  {
      $client = Client::findOrFail($client);
      return view('clients/show', 
      [
           'client'=> $client
      ]);
  }
  public function create()
  {
    return view('clients/create');
  }
  public function store(Request $request)
  {
    $data = $request->validate([
      'name'  => 'required | string',
      'address'   => 'required | string',
      'nationalid' => 'required ',
      'phone' => 'required |string|min:8|max:11',

    ]);

    Client::create([
      'name'      => $data['name'],
      'address'   => $data['address'],
      'nationalid'=> $data['nationalid'],
      'phone'     => $data['phone'],
      'user_id' => Auth::id(),
    ]);
    return redirect(url('/clients'));
  }
  public function edit($clientid)
  {
    $client = Client::findOrFail($clientid);
    return view('clients/edit', 
    [
         'client'=> $client
    ]);
  }
  public function update(Client $client , Request $request)
  {
    $data = $request->validate([
        'name'  => 'required ',
        'address'   => 'required ',
        'nationalid' => 'required ',
        'phone' => 'required ',
       

    ]);
    // $client = Client::find($data['id']);

     $client->update($data);
    return redirect(url('/clients'));
  }
  public function destroy(Client $client)
  {
      Sale::where('client_id' ,'=' ,$client->id )->delete();
      $client->delete();
      return redirect(url('/clients'));
  }
  public function search(Request $request)
  {
  $cli = $request->cli;
  $clients = Client::where('name', 'like' , "%$cli%")->get(); 
  return view('clients/search',[
        'clients'=>$clients,
        'cli'=>$cli
        ]);
  }

}
