<?php

namespace NjoguAmos\KeMobile;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class KenyaMobileFullRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! preg_match(pattern: '/^254[17][0-9]{8}$/', subject: $value)) {
            $fail(trans(key: 'kenya-mobile::kenya-mobile.phone_full'));
        }
    }
}
