<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;

class AdminController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $credentials = $request->only('name','email','password');
        User::create($credentials);
        return view('auth.login');
    }
    public function login(LoginRequest $request)
    {
        return view('admin');
    }

    public function admin()
    {
        return view('admin');
    }
}
