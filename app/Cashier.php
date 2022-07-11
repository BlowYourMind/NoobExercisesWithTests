<?php

namespace App;

class Cashier{
    private string $product;
    private int $quantity;
    private float $price;
    public function __construct(string $product, int $quantity, float $price)
    {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->price = $price;
    }
    public static function countTotalPrice(Cashier $product):float{
        $totalPrice = 0;
        $totalPrice += $product->price * $product->quantity;
        return $totalPrice;
    }
    public static function CountTotal(array $products):float{
       $total = 0;
        foreach ($products as $product){
            $total+=$product->countTotalPrice($product);
        }
        return $total;
    }
}
