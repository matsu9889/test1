<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactsController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
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

    public function store(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'content', 'detail']);
        Contact::create($contact);
        return redirect('/thanks');
    }
}
