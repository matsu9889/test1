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
        $contacts = Contact::with('category')
            ->GenderSearch($request->gender)
            ->CategorySearch($request->category_id)
            ->DateSearch($request->date)
            ->KeywordSearch($request->keyword)
            ->get();
        $categories = Category::all();
        return view('admin.index', compact('contacts', 'categories'));
    }
}
