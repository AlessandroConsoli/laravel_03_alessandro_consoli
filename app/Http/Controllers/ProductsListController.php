<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsListController extends Controller
{

    public $products = [
        ['id'=> 1, 'brand'=> 'Samsung', 'model'=> 'S24', 'screenSize'=> '6.2-inch', 'ram'=>'16Gb'],
        ['id'=> 2, 'brand'=> 'Samsung', 'model'=> 'S22', 'screenSize'=> '5.5-inch', 'ram'=>'8Gb'],
        ['id'=> 3, 'brand'=> 'Samsung', 'model'=> 'S21', 'screenSize'=> '5.2-inch', 'ram'=>'8Gb'],
        ['id'=> 4, 'brand'=> 'Apple', 'model'=> 'iphone_15', 'screenSize'=> '6.2-inch', 'ram'=>'16Gb'],
        ['id'=> 5, 'brand'=> 'Apple', 'model'=> 'iphone_14', 'screenSize'=> '6.2-inch', 'ram'=>'16Gb'],
        ['id'=> 6, 'brand'=> 'Apple', 'model'=> 'iphone_13', 'screenSize'=> '6.2-inch', 'ram'=>'8Gb'],
        ['id'=> 7, 'brand'=> 'Huawei', 'model'=> 'Pura_70', 'screenSize'=> '6.2-inch', 'ram'=>'8Gb'],
        ['id'=> 8, 'brand'=> 'Huawei', 'model'=> 'Pura_60', 'screenSize'=> '6.2-inch', 'ram'=>'8Gb'],
        ['id'=> 9, 'brand'=> 'Xiaomi', 'model'=> '14T_PRO', 'screenSize'=> '6.2-inch', 'ram'=>'8Gb'],
        ['id'=> 10, 'brand'=> 'Xiaomi', 'model'=> '14T', 'screenSize'=> '6.2-inch', 'ram'=>'16Gb'],
    ];


    public function ProductsList(){
        
        return view('products', ['products'=>$this->products]);
    }

    public function ProductDetails($id){
       
        foreach ($this->products as $product) {
            if ($id == $product['id']) {
                return view('product_details', ['product'=>$product]);              
            }
        }

    }
}
