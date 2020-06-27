<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Wishlist_model;
use App\User;
use Illuminate\Support\Facades\Auth;

class wishlist extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wishlists = Wishlist_model::all()->where('user_id', Auth::user()->id);
        return view('front.wishlist', compact('wishlists'));

//        $wishlists=Wishlist_model::findOrFail($id);
//        return view('front.wishlist', compact('wishlists'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;



      $product = Product::all()->where('pro_name',$request->pro_name)->first();
        $pro_id = $product->id;
        $pro_image = $product->image;
        $pro_price = $product->pro_price;






        $wishlist = Wishlist_model::create([
            'user_id' => $user_id,
             'pro_id' => $pro_id,
            'productname' => $request->pro_name,
            'productprice' => $pro_price,
            'productimage' => $pro_image,
        ]);

        return redirect('/wishlist');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wishlist = Wishlist_model::findOrFail($id);

        $wishlist->delete();

        return redirect('/');
    }
}
