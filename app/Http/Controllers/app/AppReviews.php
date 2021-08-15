<?php

namespace App\Http\Controllers\app;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class AppReviews extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $reviews = json_decode(Storage::get('reviews.json'));
        $suc = $request->query('success');

        return view('app.reviews', [
            'background' => '/assets/img/bg-post.jpg',
            'title' => 'Reviews',
            'success' => $suc,
            'reviews' => $reviews,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

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
            'user-name' => ['required', 'string', 'max:255'],
            'text-review' => ['required'],
        ]);
        $reviews = json_decode(Storage::get('reviews.json'));

        $reviews[] = [
            'id' => uniqid(),
            'user' => $request->input('user-name'),
            'text' => $request->input('text-review'),
            'date' => now()->format('d-m-Y'),
        ];

        Storage::put('reviews.json', json_encode($reviews));

        return redirect()->route('reviews')->with('success', "Review from \"{$request->input('user-name')}\" was added succesfully!");
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
