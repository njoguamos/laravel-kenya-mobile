<?php

namespace NjoguAmos\KeMobile;

use Illuminate\Contracts\Validation\InvokableRule;

class KenyaMobileRule implements InvokableRule
{
    public function __invoke($attribute, $value, $fail)
    {
        if (! preg_match(pattern: '/^0?[17][0-9]{8}$/', subject: $value)) {
            $fail(trans(key: 'kenya-mobile::kenya-mobile.phone'));
        }
    }
}
