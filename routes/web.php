<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses'=>'HomeController@shop','as'=>'front.shop']);



Route::get('/shop',function (){

    return view('front.shop');
});





Route::get('/shops',['uses'=>'HomeController@shop','as'=>'front.shop']);

//Route::get('/products',['uses'=>'HomeController@shop','as'=>'front.shop']);

Route::get('/products',['uses'=>'HomeController@shop','as'=>'front.shop']);

//Route::get('/products',function(){
//   return view('front.shop') ;
//
//});

//Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']],
//    function (){
//        Route::get('/',function (){
//            return view('admin.index');
//        })->name('admin.index');
//
//
//        Route::POST('admin/store', 'AdminController@store');
//
//        Route::get('/admin','AdminController@index');
//
//
//        Route::resource('product','ProductsController');
//
//
//    });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('product_details/{id}','HomeController@product_details');

Route::get('/product/addtocart/{id}',['uses'=>'ProductsController@addProductToCart','as'=>'AddToCartProduct']);

Route::get('cart',['uses'=>'ProductsController@showCart', 'as'=>'cart.cartproducts']);


Route::get('/product/deleteItemFromCart/{id}',['uses'=>'ProductsController@deleteItemFromCart','as'=>'DeleteItemFromCart']);




//Add to cart Using Ajax

Route::post('products/addToCartAjaxPost',['uses'=>'ProductsController@addToCartAjaxPost','as'=>'AddToCartAjaxPost']);
//
//
Route::get('products/addToCartAjaxGet/{id}',['uses'=>'HomeController@addToCartAjaxGet','as'=>'AddToCartAjaxGet']);


Route::get('product/increaseSingleProduct/{id}',['uses'=>'ProductsController@increaseSingleProduct','as'=>'IncreaseSingleProduct']);

Route::get('product/decreaseSingleProduct/{id}',['uses'=>'ProductsController@decreaseSingleProduct','as'=>'DecreaseSingleProduct']);


//Display Admin Panel
//Route::get('/admin',function (){
//
//   return view('admin.index');
//});

Route::group(['middleware' => ['restrictToAdmin']], function (){

//Create Products By Admin
    Route::get('admin/createProductForm',['uses'=>'AdminController@createProductForm','as'=>'adminCreateProductForm']);

//Create Post Request For Admin
    Route::post('admin/sendCreateProductForm',['uses'=>'AdminController@sendCreateProductForm','as'=>'adminSendCreateProductForm']);




//Edit Product Form
    Route::get('admin/editProductForm/{id}',['uses'=>'AdminController@editProductForm','as'=>'adminEditProductForm']);

//Edit Product Image Form
    Route::get('admin/editProductImageForm/{id}',['uses'=>'AdminController@editProductImageForm','as'=>'adminEditProductImageForm']);

//Delete Product
    Route::get('admin/editProductImageForm/{id}',['uses'=>'AdminController@editProductImageForm','as'=>'adminEditProductImageForm']);

//Update Product Image
    Route::post('admin/updateProductImage/{id}',['uses'=>'AdminController@updateProductImage','as'=>'adminUpdateProductImage']);

//Update Product Form
    Route::post('admin/updateProduct/{id}',['uses'=>'AdminController@updateProduct','as'=>'adminUpdateProduct']);

//Delete AdminProducts

    Route::get('admin/deleteProduct/{id}',['uses'=>'AdminController@deleteProduct','as'=>'adminDeleteProduct']);


    //Admin Order Panel
    Route::get('admin/ordersPanel/',['uses'=> 'AdminController@ordersPanel','as'=>'ordersPanel']);

    //Delete Order
    Route::get('admin/deleteOrder/{id}',['uses'=>'AdminController@deleteOrder','as'=>'adminDeleteOrder']);

    //Payment Info Order
    Route::get('payment/getPaymentInfoByOrderId/{order_id}',['uses'=>'Payment\PaymentsController@getPaymentInfoByOrderId',
        'as'=>'getPaymentInfoByOrderId']);
//Discount Feature
    Route::get('admin/discountcouponForm',['uses'=>'AdminController@discountcouponForm','as'=>'discountcouponForm']);

    Route::post('admin/senddiscountcouponForm',['uses'=>'AdminController@senddiscountcouponForm','as'=>'admindiscountcouponForm']);


    Route::get('admin/dispalycoupons',['uses'=>'AdminController@display','as'=>'adminDisplayCoupons']);

    Route::get('admin/deleteCoupons/{id}',['uses'=>'AdminController@deleteCoupons','as'=>'adminDeleteCoupons']);

    Route::get('admin/editOrderForm/{order_id}',['uses'=>'AdminController@editOrderForm','as'=>'adminEditOrderForm']);

    Route::post('admin/updateOrder/{order_id}',['uses'=>'AdminController@updateOrder','as'=>'adminUpdateOrder']);

    Route::get('search',['uses'=>'AdminController@search','as'=>'searchProducts']);



});


Route::get('/admin',['uses'=>'AdminController@indexes','as'=>'adminindex'])->middleware('restrictToAdmin');


//Admin Panel
Route::get('admin/products',['uses'=>'AdminController@index','as'=>'adminDisplayProducts']);


//Linking Social Media

Route::get('auth/{provider}','Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback','Auth\RegisterController@handleProviderCallback');

//Show Categories
Route::get('products/mobile',['uses'=>'HomeController@mobileproducts','as'=>'mobileforproducts']);
Route::get('products/tablet',['uses'=>'HomeController@tabletproducts','as'=>'tabletsforproducts']);
Route::get('products/accessories',['uses'=>'HomeController@accessoriesproducts','as'=>'accessoriesforproducts']);

//Show Brands
Route::get('products/apple',['uses'=>'HomeController@applebrands','as'=>'appleforbrands']);

Route::get('products/oppo',['uses'=>'HomeController@oppobrands','as'=>'oppoforbrands']);

Route::get('products/huawei',['uses'=>'HomeController@huaweibrands','as'=>'huaweiforbrands']);


//SearchProducts
Route::get('search',['uses'=>'HomeController@search','as'=>'searchProducts']);


//Create Product
//Route::get('product/createOrder/',["uses"=>"ProductsController@createOrder",'as'=>'createOrder']);

//checkout Page
Route::get('product/checkoutProducts/',['uses'=>'ProductsController@checkoutProducts','as'=>'checkoutProducts']);


//checkoutpage functionality
Route::post('product/createOrder',["uses"=>'ProductsController@createOrder','as'=>'createOrder']);

//Route::get('product/createOrder',["uses"=>'ProductsController@createOrder','as'=>'createOrder']);

//Payment Page
Route::get('payment/paymentpage',['uses'=>'Payment\PaymentsController@showPaymentPage','as'=>'showPaymentPage']);

//payment Receipt

Route::get('payment/paymentreceipt/{paymentID}/{payerID}',['uses'=>'Payment\PaymentsController@showPaymentReceipt','as'=>'showPaymentReceipt']);

//CouponsController

Route::post('/coupon', 'CouponsController@store')->name('coupon.store');



//Remove Coupon
Route::delete('/coupon','CouponsController@destroy')->name('coupon.destroy');

//Discount Try

Route::post('product/proprice',['uses'=>'ProductsController@CouponPrice','as'=>'CouponPrice']);


//Add WishList
Route::resource('/wishlist','wishlist');

//Reviews
Route::resource('/review','ReviewController');

//Fetch Prices
Route::get('products/fetchpriceajax',['uses'=>'ProductsController@fetchpricejax','as'=>'fetchpriceajax']);

//Comparision
Route::post('/comparison/compare',['uses'=>'ComparisonController@compare','as'=>'comparison.compare']);

//Comparision get
Route::get('/comparison',['uses'=>'ComparisonController@index','as'=>'comparison.index']);

//contact get
Route::get('/contact',['uses'=>'ContactController@create']);

Route::post('/contact',['uses'=>'ContactController@store','as'=>'contact.store']);

////Order Created Email
//Route::post('product/checkoutProducts/',['uses'=>'OrderController@store','as'=>'order.email']);

Route::get('/recommendation/{id}', function ($id) {
    $products        = json_decode(file_get_contents(storage_path('data/products-data.json')));
    $selectedId      = intval($id);
    $selectedProduct = $products[0];

    $selectedProducts = array_filter($products, function ($product) use ($selectedId) { return $product->id === $selectedId; });
    if (count($selectedProducts)) {
        $selectedProduct = $selectedProducts[array_keys($selectedProducts)[0]];
    }

    $productSimilarity = new App\ProductSimilarity($products);
    $similarityMatrix  = $productSimilarity->calculateSimilarityMatrix();
    $products          = $productSimilarity->getProductsSortedBySimularity($selectedId, $similarityMatrix);

    return view('recommendation', compact('selectedId', 'selectedProduct', 'products'));
});