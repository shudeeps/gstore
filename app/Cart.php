<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id,$qty) {
        $storedItem = ['qty' => $qty, 'price' => $item->pro_price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
              $storedItem['qty'] +=$qty;
            }
        }
       // $storedItem['qty']++;
        $storedItem['price'] = $item->pro_price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->pro_price*$qty;
    }


    public function update($id,$qty){


        $this->totalPrice -= $this->items[$id]['item']['pro_price'] * ($this->items[$id]['qty']-$qty);
        $this->items[$id]['qty']=$qty;
        $this->items[$id]['price'] = $this->items[$id]['item']['pro_price']  * $qty;

        //$this->totalQty-=$qty;  


        if ($this->items[$id]['qty'] <= 0) {
            unset($this->items[$id]);
        }

    }

    public function delete($id){
        $this->totalQty--;
        $this->totalPrice-=$this->items[$id]['price'];
        unset($this->items[$id]);

    }
}
