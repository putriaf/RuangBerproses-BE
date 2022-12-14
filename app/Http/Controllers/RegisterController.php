<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nama' => 'required|max:255',
        //     'username' => ['required', 'min:3', 'max:255', 'unique:users'],
        //     'email' => 'required|email:dns|unique:users',
        //     'no_telp' => 'required|numeric|digits_between:10,14',
        //     'jk' => 'required|max:1',
        //     'tgl_lahir' => 'required',
        //     'password' => 'required|min:5|max:255',
        //     'role' => 'required',
        // ]);

        $register = User::create([
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'no_telp' => $request->input('no_telp'),
            'jk' => $request->input('jk'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'password' => $request->input('password'),
            'role' => $request->input('role')
        ]);

        if ($register) {
            return response()->json([
                'success' => true,
                'message' => 'Registration successful, please login!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Registration failed, try again!',
            ], 400);
        }
    }
}