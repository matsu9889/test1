<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'address', 'building', 'content', 'detail']);
        $contact['tel'] = $request->tel1 . $request->tel2 . $request->tel3;
        $genderMap = [
            1 => '男性',
            2 => '女性',
            3 => 'その他',
        ];

        $contact['gender_text'] = $genderMap[$contact['gender']] ?? '';
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'content', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
