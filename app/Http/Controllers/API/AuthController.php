<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login()
    {
        $fields = request()->only(['email', 'password']);
        $validator = Validator::make($fields, [
            'email'    => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'INVALID',
                'error'  => 'Please enter your email and password'
            ]);
        }

        if (!auth()->attempt($fields)) {
            return response()->json([
                'status' => 'ERROR',
                'error'  => 'Login failed!'
            ], 403);
        }

        # Create a token
        $user = User::where('email', request()->email)->firstOrFail();
        $token = $user->createToken($user->id);

        return response()->json([
            'token'  => $token->plainTextToken,
            'user'   => $user,
            'status' => 'OK'
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
