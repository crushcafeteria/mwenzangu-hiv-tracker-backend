<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Suggested;
use App\Models\User;
use Illuminate\Http\Request;

class SuggestedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suggested = User::inRandomOrder()->paginate();

        return response()->json([
            'status' => 'OK',
            'count'  => $suggested->friends->count(),
            'data'   => $suggested->friends
        ]);
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
     * @param  \App\Models\Suggested  $suggested
     * @return \Illuminate\Http\Response
     */
    public function show(Suggested $suggested)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suggested  $suggested
     * @return \Illuminate\Http\Response
     */
    public function edit(Suggested $suggested)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suggested  $suggested
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suggested $suggested)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suggested  $suggested
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suggested $suggested)
    {
        //
    }
}
