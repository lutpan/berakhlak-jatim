<?php

namespace App\Rules;

use Attribute;
use Illuminate\Contracts\Validation\Rule;

class wordCount implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    private $attribute;
    private $expected;
    public function __construct(int $expected)
    {
        $this->expected = $expected;
    }
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return str_word_count($value) < $this->expected;
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attribute harus kurang dari ' . ($this->expected - 3) . ' kata';
    }
}
