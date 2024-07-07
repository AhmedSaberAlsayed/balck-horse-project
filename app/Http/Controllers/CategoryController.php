<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create ()
    {
        return view('category.create');
    }
    public function store(Request $request )
    {
        category::create([
        'Category_name'=>$request->Category_name,
        ]
        );
    }
}
