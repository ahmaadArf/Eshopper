<?php

namespace App\Http\Controllers\Site;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\Contact;
use App\Models\Card;
use App\Models\Client;
use App\Models\Review;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index()
    {
        $sliders=Slider::all();
        $products=Product::all();
        $clients=Client::all();


        return view('site.index',compact('sliders','products','clients'));
    }

    public function cart()
    {
        $carts=Card::all();
        return view('site.cart',compact('carts'));
    }

    public function checkout()
    {
        $carts=Card::all();

        return view('site.checkout',compact('carts'));
    }
    public function contact()
    {
        return view('site.contact');
    }
    public function detail($id)
    {
        $product=Product::find($id);
        $products=Product::all();

        return view('site.detail',compact('product','products'));
    }
    public function shop()
    {
        $numbers=array(0,0,0,0,0);
        $products=Product::all();

        foreach($products as $product){
            if($product->price<=99)
              $numbers[0]++;
            elseif($product->price<=199)
              $numbers[1]++;
            elseif($product->price<=299)
              $numbers[2]++;
            elseif($product->price<=399)
              $numbers[3]++;
            elseif($product->price<=499)
              $numbers[4]++;

        }
        $colors=array(0,0,0,0,0);
        foreach($products as $product){
            if($product->color=='Black')
              $colors[0]++;
            elseif($product->color=='White')
              $colors[1]++;
            elseif($product->color=='Blue')
              $colors[2]++;
            elseif($product->color=='Red')
              $colors[3]++;
            elseif($product->color=='Green')
              $colors[4]++;

        }
        $sizes=array(0,0,0,0,0);
        foreach($products as $product){
            if($product->size=='XS')
              $sizes[0]++;
            elseif($product->size=='S')
              $sizes[1]++;
            elseif($product->size=='M')
              $sizes[2]++;
            elseif($product->size=='L')
              $sizes[3]++;
            elseif($product->size=='Xl')
              $sizes[4]++;

        }

        return view('site.shop',compact('numbers','products','colors','sizes'));
    }

    public function category($id)
    {
        $category=Category::find($id);
        return view('site.category',compact('category'));
    }

    public function add_to_cart(Request $request)
    {
        $request->validate([
        'product_id' => 'exists:products,id'
        ]);

        $product = Product::select('price')->where('id', $request->product_id)->first();

        $cart=Card::where('user_id',1)->where('product_id',$request->product_id)->first();
        $count=1;
        if($request->quantity){
            $count=$request->quantity;
        }

        if($cart){

           $cart->update(['quantity'=>$cart->quantity +$count]);

        }
        else{
        Card::create([
            'quantity'=>$count,
            'user_id'=>1,
            'product_id'=>$request->product_id,
            'price'=>$product->price
        ]);
          }
        return redirect()->back();


    }
    public function remove_from_cart($id)
    {
        Card::find($id)->forcedelete();
        return redirect()->back();

    }
    public function add_review(Request $request)
    {
        $request->validate([
            'product_id' => 'exists:products,id'
        ]);
        Review::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'review'=>$request->review,
            'user_id'=>1,
            'product_id'=>$request->product_id
        ]);

        return redirect()->back();

    }
    public function contact_data(Request $request)
    {
        $data=$request->except('_token');

       Mail::to('taifjamal08@gmail.com')->send(new Contact($data));
       return redirect()->back();

    }
    public function search(Request $request)
    {
        $products=Product::where('name', 'like', '%'.$request->search.'%')->get();
        $search=$request->search;
        return view('site.shop',compact('products','search'));
    }

}
