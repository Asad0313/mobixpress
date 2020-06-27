<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

use App\Product;

use App\User;

use App\Review;

class ReviewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reviews = Review::all()->where('users_id',Auth::user()->id);
        return view('Review.index',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();



        return view('Review.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users_id = Auth::user()->id;
        $email = Auth::user()->email;
        $FullName = $request->FullName;
        $pro_name = $request->pro_name;
        $productQuality = $request->productQuality;
        $DeliveryService = $request->DeliveryService;
        $otherServices = $request->otherServices;
        $other = $request->other;
        $YourViews = $request->YourViews;

        $product = Product::all()->where('pro_name',$request->pro_name)->first();

        $pro_id = $product->id;
        $pro_image = $product->image;


        $review = Review::create([
            'users_id' => $users_id,
            'pro_id' => $pro_id,
            'pro_image' => $pro_image,
            'email' => $email,
            'FullName' => $FullName,
            'pro_name' => $pro_name,
            'productQuality' => $productQuality,
            'DeliveryService' => $DeliveryService,
            'otherServices' => $otherServices,
            'other' => $other,
            'YourViews' => $YourViews,
        ]);

        return redirect('/review');
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
        $products = Product::all();
        $review = Review::findOrFail($id);
        return view('Review.edit',compact('review','products'));
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
        $review = Review::findOrFail($id);

        $users_id = Auth::user()->id;
        $email = Auth::user()->email;
        $FullName = $request->FullName;
        $pro_name = $request->pro_name;
        $productQuality = $request->productQuality;
        $DeliveryService = $request->DeliveryService;
        $otherServices = $request->otherServices;
        $other = $request->other;
        $YourViews = $request->YourViews;

        $product = Product::all()->where('pro_name',$request->pro_name)->first();

//        $pro_id = $product->id;
//        $pro_image = $product->image;




        $review->update([
            'users_id' => $users_id,
//            'pro_id' => $pro_id,
//            'pro_image' => $pro_image,
            'email' => $email,
            'FullName' => $FullName,
            'pro_name' => $pro_name,
            'productQuality' => $productQuality,
            'DeliveryService' => $DeliveryService,
            'otherServices' => $otherServices,
            'other' => $other,
            'YourViews' => $YourViews,
        ]);

        return redirect('/review');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);

        $review->delete();

        return redirect('/review');
    }
}

