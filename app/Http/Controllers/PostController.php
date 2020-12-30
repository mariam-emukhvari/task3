<?php

namespace App\Http\Controllers;

use App\Models\CustomUser;
use App\Models\Products;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('welcome', compact('products'));
    }

    public function indexCanPost()
    {
        return view('addProduct');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'short_description' => 'required',
        ]);

        Products::create([
           'title' => $request->name,
           'text' => $request->srname,
           'short_description' => $request->address,
        ]);

        return redirect('/');
    }
}
