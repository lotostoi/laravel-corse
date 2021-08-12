<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonArea extends Controller
{
    //
    public function index()
    {
        $resources = json_decode(Storage::get('resources.json'));
        return view('app.person-area', [
            'background' => '/assets/img/bg-post.jpg',
            'title' => 'Person area',
            'resources' => $resources,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'user' => ['required'],
            'phone' => ['required', ],
            'email' => ['required', 'email:rfc,dns'],
            'resource' => ['required'],
        ]);
        $resources = json_decode(Storage::get('resources.json'));
        $resources[] = [
            'id' => uniqid(),
            'user' => $request->input('user'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'resource' => $request->input('resource'),
            'date' => now()->format('d-m-Y'),
        ];

        Storage::put('resources.json', json_encode($resources));

        return redirect()->route('person-area')->with('success', "Resource from \"{$request->input('user')}\" was added succesfully!");
    }
}
