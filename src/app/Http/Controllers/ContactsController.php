<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['family-name', 'given-name', 'gender', 'email', 'number1', 'number2', 'number3', 'address', 'building', 'kinds' ,'content']);
        return view('confirm',compact('contact'));
    }
}
