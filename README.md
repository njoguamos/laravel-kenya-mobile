![Art work](/art.png)

# Validate Kenyan Mobile Phone 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/njoguamos/laravel-kenya-mobile.svg?style=flat-square)](https://packagist.org/packages/njoguamos/laravel-kenya-mobile)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/njoguamos/laravel-kenya-mobile/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/njoguamos/laravel-kenya-mobile/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/njoguamos/laravel-kenya-mobile/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/njoguamos/laravel-kenya-mobile/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/njoguamos/laravel-kenya-mobile.svg?style=flat-square)](https://packagist.org/packages/njoguamos/laravel-kenya-mobile)

A rule for validating Kenyan mobile number.

## 1. Why use this package
1. Save time from implementing your own validation rule.
2. Multiple phone number supported.

## 2. Installation

You can install the package via composer:

```bash
composer require njoguamos/laravel-kenya-mobile
```

## 3. Usage

### 3.1 Inside a form request

```php
<?php

namespace App\Http\Requests;

use App\Rules\PhoneNumberRule;
use NjoguAmos\KeMobile\KenyaMobileRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /** @return array<string, mixed> */
    public function rules(): array
    {
        return [
            // ... other rules
            'phone'    => ['nullable', new KenyaMobileRule(),'unique:users,phone'],
        ];
    }
}

```
### 3.2 Supported mobile numbers


## 4. Testing

```bash
composer test
```

## 5. Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## 6. Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## 7. Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## 8. Credits

- [Njogu Amos](https://github.com/njoguamos)
- [All Contributors](../../contributors)

## 9. License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
