<?php

use Illuminate\Contracts\Validation\InvokableRule;
use NjoguAmos\KeMobile\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

expect()
    ->extend(name: 'toPassWith', extend: function (mixed $value) {
        $rule = $this->value;

        if (! $rule instanceof InvokableRule) {
            throw new Exception(message: 'Value is not an invokable rule');
        }

        $passed = true;

        $fail = function () use (&$passed) {
            $passed = false;
        };

        $rule(attribute: 'attribute', value: $value, fail: $fail);

        expect(value: $passed)->toBeTrue();
    });
