<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Shirt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    

    public function create() {

        $categories = Category::all();
        return view ('admin.products.create', ['categories' => $categories]);

    }

    public function store(Request $request) {

        $validated = $request->validate([
            'category_id'       => 'required|exists:categories,id',
            'name'              => 'required|string|max:255',
            'slug'              => 'required|string|max:255|unique:shirts,slug',
            'description'       => 'nullable|string',
            'price'             => 'required|numeric|min:0',
            'discounted_price'  => 'nullable|numeric|min:0|lte:price',
            'stock'             => 'required|integer|min:0',
            'size'              => 'required|in:S,M,L,XL',
            'color'             => 'nullable|string|max:100',
            'image_path'        => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);
    
        // Handle file upload
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('shirts', 'public');
        }
    
        Shirt::create($validated);
    
        return redirect()->route('admin.products')->with('success', 'Shirt created successfully.');

    }

    public function edit($id)
    {
        $product = Shirt::findOrFail($id);
        $categories = Category::all(); 
        return view('admin.products.edit', compact('product', 'categories'));
    }



    public function update(Request $request, $id)
    {
        $product = Shirt::findOrFail($id);
    
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:shirts,slug,' . $id,
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'discounted_price' => 'nullable|numeric',
            'stock' => 'required|integer',
            'size' => 'required|in:S,M,L,XL',
            'color' => 'nullable|string|max:50',
            'image' => 'nullable|image|max:2048',
        ]);
    
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discounted_price = $request->discounted_price;
        $product->stock = $request->stock;
        $product->size = $request->size;
        $product->color = $request->color;
    
        if ($request->hasFile('image')) {
            // delete old image
            if ($product->image && Storage::exists('public/' . $product->image)) {
                Storage::delete('public/' . $product->image);
            }
    
            // store new image
            $path = $request->file('image')->store('products', 'public');
            $product->image = $path;
        }
    
        $product->save();
    
        return redirect()->route('admin.products')->with('success', 'Shirt updated successfully.');
    }




public function destroy($id)
{
    $product = Shirt::findOrFail($id);

    // delete image from storage
    if ($product->image && Storage::exists('public/' . $product->image)) {
        Storage::delete('public/' . $product->image);
    }

    $product->delete();

    return redirect()->route('admin.products')->with('success', 'Shirt deleted successfully.');
}
}
