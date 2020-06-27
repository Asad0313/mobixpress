<?php


namespace App;


class Cart
{
    public $items;
    public $totalQuantity;
    public $totalPrice;



    public function __construct($prevCart)
    {
        if($prevCart != null){
            $this->items = $prevCart->items;
            $this->totalQuantity = $prevCart->totalQuantity;
            $this->totalPrice = $prevCart->totalPrice;



        }else{
            $this->items = [];
            $this->totalQuantity = 0;
            $this->totalPrice = 0;



        }

    }
    public function addItem($id,$products){

        $price = $products->pro_price;


        if(array_key_exists($id,$this->items)){
            $productToAdd = $this->items[$id];
            $productToAdd['quantity']++;
            $productToAdd['price'] = $productToAdd['quantity'] * $price;




        }else{
            $productToAdd = ['quantity'=> 1, 'price'=> $price, 'data'=>$products];


        }

        $this->items[$id] = $productToAdd;
        $this->totalQuantity++;
        $this->totalPrice = $this->totalPrice + $price;


    }


    public function updatePriceAndQuantity(){

        $totalPrice = 0;
        $totalQuantity = 0;

foreach ($this->items as $item){

    $totalQuantity = $totalQuantity + $item['quantity'];
    $totalPrice = $totalPrice + $item['price'];
}


     $this->totalQuantity = $totalQuantity;
     $this->totalPrice = $totalPrice;

    }




}