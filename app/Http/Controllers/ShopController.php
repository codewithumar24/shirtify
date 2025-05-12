<?php

namespace App\Http\Controllers;

use App\Models\Shirt;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    
    public function index()
    {
        $shirts = Shirt::all();
        return view('shirts.index',['shirts'=>$shirts]);
    }

    public function shop()
    {
         $shirts = Shirt::all(); // Shirt model se data
        return view('shirts.shop',['shirts'=>$shirts]);
    }

public function productDetail($id)
{
    $product = Shirt::findOrFail($id);

    // Related shirts (same category ke ya random 3 others)
    $related = Shirt::where('id', '!=', $id)
                    ->where('category_id', $product->category_id)
                    ->inRandomOrder()
                    ->take(3)
                    ->get();

    return view('shirts.product', compact('product', 'related'));
}

    public function contact()
    {
        
        return view('shirts.contact');
    }

    public function addToCart()
    {
       return view("shirts.addcart");
    }

    public function about()
    {
        return view("shirts.about");
    }

    public function checkout()
    {
        return view('shirts.checkout');
    }
}
