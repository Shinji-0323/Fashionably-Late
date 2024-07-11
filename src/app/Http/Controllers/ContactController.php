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
        return view('index');
    }
    public function confirm(ContactRequest $request)
    {
        $tel = $request['tel1'] . $request['tel2'] . $request['tel3'];
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'address', 'building', 'detail', 'content']);
        return view('confirm', compact('contact','tel'));
    }
    public function store(Request $request)
    {

        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail']);
        $category = $request->only(['content']);
        Contact::create($contact);
        Category::create($category);
        return view('thanks');
    }
}
