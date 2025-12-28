<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
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

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'content', 'detail']);
        Contact::create($contact);
        return redirect('/thanks');
    }
}
