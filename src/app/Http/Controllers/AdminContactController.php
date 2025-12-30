<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function find()
    {
        return view('find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $item = Author::where('name', 'LIKE', "%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }
}
