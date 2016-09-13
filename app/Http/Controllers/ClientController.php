<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Models\Client;
use Illuminate\Http\Request;

use CodeProject\Http\Requests;
use CodeProject\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function index()
    {
    	 return \CodeProject\Models\Client::all();
	}

	public function store(Request $request)
    {
    	 return \CodeProject\Models\Client::create($request->all());
	}

	public function show($id)
    {
    	 return \CodeProject\Models\Client::find($id);
	}

	public function destroy($id)
    {
    	 \CodeProject\Models\Client::find($id)->delete();
	}


    //Verificar
    public function update (Request $request, $id)
    {
         return \CodeProject\Models\Client::update($request->all());
    }
}
   
