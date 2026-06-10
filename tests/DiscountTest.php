<?php

use PHPUnit\Framework\TestCase;
use App\Discount;

class DiscountTest extends TestCase
{
    public function test_apply_discount_correct_20_percent()
    {
        $discount = new Discount();

        $result = $discount->applyDiscount(100, 20);

        $this->assertEquals(80, $result);
    }

    public function test_apply_discount_zero_percent_returns_same_value()
    {
        $discount = new Discount();

        $result = $discount->applyDiscount(100, 0);

        $this->assertEquals(100, $result);
    }

    public function test_apply_discount_100_percent_returns_zero()
    {
        $discount = new Discount();

        $result = $discount->applyDiscount(100, 100);

        $this->assertEquals(0, $result);
    }

    public function test_invalid_percent_returns_original_total()
    {
        $discount = new Discount();

        $this->assertEquals(100, $discount->applyDiscount(100, -5));
        $this->assertEquals(100, $discount->applyDiscount(100, 150));
    }
}