<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
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

        $contact = $request->only(['last_name', 'first_nama', 'gender', 'email', 'tel', 'address', 'building', 'detail', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}
