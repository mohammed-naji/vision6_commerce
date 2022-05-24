<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function add_cart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|min:1'
        ]);

        $product = Product::find($request->product_id);

        Cart::updateOrCreate([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id
        ], [
            'quantity' => DB::raw('quantity + '. $request->quantity),
            // 'quantity' => $request->quantity,
            'user_id' => Auth::id(),
            'price' => $product->final_price
        ]);

        // $cart = Cart::where('user_id', Auth::id())->where('product_id', $request->product_id)->first();

        // if($cart) {
        //     $cart->update(['quantity' => $request->quantity + $cart->quantity]);
        // }else {
        //     Cart::create([
        //         'product_id' => $request->product_id,
        //         'quantity' => $request->quantity,
        //         'user_id' => Auth::id(),
        //         'price' => $product->final_price
        //     ]);
        // }



        // dd($request->all());
        return redirect()->back()->with('msg', 'Product added to cart successfully');
    }

    public function cart()
    {
        $carts = Auth::user()->carts;
        return view('site.cart', compact('carts'));
    }
}
