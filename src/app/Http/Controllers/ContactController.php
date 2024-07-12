<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        return view('index',compact('contacts', 'categories'));
    }
    public function confirm(ContactRequest $request)
    {
        $tel = $request['tel1'] . $request['tel2'] . $request['tel3'];
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'address', 'building', 'category_id', 'detail']);
        return view('confirm', compact('contact','tel'));
    }
    public function store(Request $request)
    {
        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
