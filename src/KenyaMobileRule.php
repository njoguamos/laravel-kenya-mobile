<?php

namespace NjoguAmos\KeMobile;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class KenyaMobileRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! preg_match(pattern: '/^0?[17][0-9]{8}$/', subject: $value)) {
            $fail(trans(key: 'kenya-mobile::kenya-mobile.phone'));
        }
    }
}
