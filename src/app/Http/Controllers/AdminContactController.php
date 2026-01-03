<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        $authors = Contact::Paginate(7);
        return view('admin.index', compact('contacts', 'categories', 'authors'));
    }

    public function search(Request $request)
    {
        $query = Contact::query();

        if ($request->input != '') {
            $query->where('name', 'LIKE', "%{$request->input}%")
                ->orwhere('email', 'LIKE', "%{$request->input}%");
        }

        if ($request->gender != '') {
            $query->where('gender', $request->gender);
        }

        if ($request->detail != '') {
            $query->where('category_id', $request->detail);
        }

        $categories = Category::all();
        $contacts = $query->get();
        return view('admin.index', compact('contacts', 'categories'));
    }
}
