<?php

use PHPUnit\Framework\TestCase;
use App\Cart;

class CartTest extends TestCase
{
    public function test_can_add_item_to_cart()
    {
        $cart = new Cart();

        $cart->addItem("Apple", 10, 2);

        $this->assertCount(1, $cart->getItems());
    }

    public function test_get_total_calculates_correct_sum()
    {
        $cart = new Cart();

        $cart->addItem("Apple", 10, 2); // 20
        $cart->addItem("Banana", 5, 3); // 15

        $this->assertEquals(35, $cart->getTotal());
    }

    public function test_get_item_count_returns_correct_quantity_sum()
    {
        $cart = new Cart();

        $cart->addItem("Apple", 10, 2);
        $cart->addItem("Banana", 5, 3);

        $this->assertEquals(5, $cart->getItemCount());
    }

    public function test_does_not_add_invalid_price()
    {
        $cart = new Cart();

        $cart->addItem("Apple", -10, 2);

        $this->assertCount(0, $cart->getItems());
    }

    public function test_does_not_add_empty_name()
    {
        $cart = new Cart();

        $cart->addItem("   ", 10, 2);

        $this->assertCount(0, $cart->getItems());
    }

    public function test_does_not_add_negative_quantity()
    {
        $cart = new Cart();

        $cart->addItem("Apple", 10, -2);

        $this->assertCount(0, $cart->getItems());
    }
}