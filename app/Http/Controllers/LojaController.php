<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data= Product::all();

       return view('loja',['products'=>$data
    ]);
    }

    public function detail($id){

        $data= Product::find($id);

        return view('details',['product'=>$data]);

    }

    public function addToCart(Request $req){
        
        if($req->session()->has('user')){

            $cart= new Cart;

            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;

            $cart->save();

            return redirect('/');

        }else{
            return redirect('/login');
        }


    }

    static function cartItem(){

    

        if(Session::exists('user')){
            $user_id=Session::get('user')['id'];
         return Cart::where('user_id',$user_id)->count();
        }else{
            return "0";
        }
        // $user_id=Session::get('user')['id'];

        // return Cart::where('user_id',$user_id)->count();

    }
 public function cartList(){

        $user_id=Session::get('user')['id'];

        $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$user_id)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);

    }

    public function removeCart($id){
        Cart::destroy($id);

        return redirect('cartlist');
    }


    public function orderNow(){
        $user_id=Session::get('user')['id'];

     return   $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$user_id)
        ->sum('products.price');
    }

    public static function sumCart(){
        $user_id=Session::get('user')['id'];

        return   $products=DB::table('cart')
           ->join('products','cart.product_id','=','products.id')
           ->where('cart.user_id',$user_id)
           ->sum('products.price');
    }

    public function orderPlace(Request $req){

     $user_id=Session::get('user')['id'];

    $allCart=Cart::where('user_id',$user_id)->get();

        foreach($allCart as $cart){
            
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="Pendente";
            $order->payment_method=$req->radio;
            $order->payment_status="Pendente"; 
            $order->address=$req->address;
            $order->province=$req->province;   

            $order->save();

            Cart::where('user_id',$user_id)->delete();
        }

        return view('orderplace');

    }

    public function checkout($id){

        $data= Product::find($id);

        return view('checkout',['product'=>$data]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
