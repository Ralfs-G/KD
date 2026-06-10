<?php

use PHPUnit\Framework\TestCase;
use App\Validator;

class ValidatorTest extends TestCase
{
    public function test_valid_email_returns_true()
    {
        $validator = new Validator();

        $this->assertTrue($validator->isValidEmail("test@test.com"));
    }

    public function test_invalid_email_returns_false()
    {
        $validator = new Validator();

        $this->assertFalse($validator->isValidEmail("invalid-email"));
    }

    public function test_empty_string_returns_false()
    {
        $validator = new Validator();

        $this->assertFalse($validator->isNotEmpty(""));
    }

    public function test_non_empty_string_returns_true()
    {
        $validator = new Validator();

        $this->assertTrue($validator->isNotEmpty("Hello"));
    }

    public function test_quantity_must_be_positive()
    {
        $validator = new Validator();

        $this->assertTrue($validator->isValidQuantity(1));
        $this->assertFalse($validator->isValidQuantity(0));
        $this->assertFalse($validator->isValidQuantity(-5));
    }
}