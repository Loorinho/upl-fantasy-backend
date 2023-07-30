<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{

    public function register(Request $request)
    {
        // $password = bcrypt($request->password);
        $password = Hash::make($request->password);

        $user = User::create([
            'email' => $request->email,
            'password' => $password,
            'name' => $request->name
        ]);

        $token = $user->createToken('access_token')->accessToken;

        return response()->json([
            'access_token' => $token,
            'message' => 'User created successfully!'
        ]);
    }

    public function login(Request $request)
    {
        $user =  User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Invalid login credentials'
            ]);
        }
        $token = $user->createToken('access_token')->accessToken;

        return response()->json([
            'user' => $user,
            'access_token' => $token,
        ]);


        // if(!$user || $user->password != $request->password)
        // {
        //     return response()->json([
        //         'message'=>'Invalid login credentials'
        //     ]);
        // }
    }

    public function getUsers(Request $request)
    {
        $users = User::all();

        return response()->json([
            'users'=> $users
        ]);
    }
}
