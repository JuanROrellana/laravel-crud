<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client as Client;

class ClientController extends Controller
{

    public function list()
    {
    }

    public function show(int $id)
    {
        $client = Client::find($id);

        return response($client, 200)
            ->header('Content-Type', 'application/json');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $client = new Client;
        $client->name = $request->input('name');
        $client->document = $request->input('document');
        $client->active = $request->input('active');
        $client->save();

        return response('updated', 201)
            ->header('Content-Type', 'text/plain');
    }

    public function update(Request $request)
    {
        $client = Client::find($request->input('id'));
        $client->name = $request->input('name');
        $client->document = $request->input('document');
        $client->active = $request->input('active');

        return response('updated', 203)
            ->header('Content-Type', 'text/plain');
    }

    public function delete(int $id)
    {
        $client = Client::find($id);
        $client->delete();

        return response('Deleted', 204)
            ->header('Content-Type', 'text/plain');
    }
}
