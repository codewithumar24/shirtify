<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view("admin.category.index",['categorys' => $category]);
    }

    public function create(){
        return view("admin.category.create");
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255|unique:categories,name',
        'slug' => 'required|string|max:255|unique:categories,slug',
    ]);

    Category::create([
        'name' => $request->name,
        'slug' => $request->slug,
    ]);

    return redirect()->back()->with('success', 'Category created successfully.');
}

}
