<?php

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;
use NjoguAmos\KeMobile\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

expect()
    ->extend(name: 'toPassWith', extend: function (mixed $value) {
        $rule = $this->value;

        if (! $rule instanceof ValidationRule) {
            throw new Exception(message: 'Value is not an invokable rule');
        }

        $passed = true;

        $fail = function (?string $message = null) use (&$passed) {
            $passed = false;

            return new PotentiallyTranslatedString($message ?? 'attribute', app('translator'));
        };

        $rule->validate('attribute', $value, $fail);

        expect(value: $passed)->toBeTrue();
    });
