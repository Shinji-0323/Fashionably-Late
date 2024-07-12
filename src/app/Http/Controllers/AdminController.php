<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Category;
use App\Models\Contact;

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
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        $admins =  Contact::simplePaginate(7);
        return view('admin', compact('contacts', 'categories','admins'));
    }
}
