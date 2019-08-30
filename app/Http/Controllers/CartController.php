<?php

namespace App\Http\Controllers;
use \Cart as Cart;
use Validator;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
    //
     public function index()
    {
        $products = Product::inRandomOrder()->take(4)->get();
         
        return view('cart')->with('products',$products);
    }



     public function store(Request $request)
    {
    	$duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });
        if (!$duplicates->isEmpty()) {
            return redirect('cart')->withSuccessMessage('L\'article est déjà dans votre panier!');
        }
    	Cart::add( $request->id,$request->name,1,$request->price)->associate('App\Product');
    	return redirect()->route('cart.index')->with('success_message','l\'article a été ajouté à votre panier');
       
    }


    
      public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success_message', 'L\'article a été retiré!');
    }



    public function switchToSaveForLater($id)
    {
        /*$item = Cart::get($id);

        Cart::remove($id);

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Product');*/
        $item = Cart::get($id);
        Cart::remove($id);
        
        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)
                                  ->associate('App\Product');

        return redirect('cart')->withSuccessMessage('L\'article a été sauvegardé pour plus tard!');
    }



}
