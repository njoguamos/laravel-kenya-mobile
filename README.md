![Art work](/art.png)

# Validate Kenyan Mobile Phone 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/njoguamos/laravel-kenya-mobile.svg?style=flat-square)](https://packagist.org/packages/njoguamos/laravel-kenya-mobile)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/njoguamos/laravel-kenya-mobile/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/njoguamos/laravel-kenya-mobile/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/njoguamos/laravel-kenya-mobile/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/njoguamos/laravel-kenya-mobile/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/njoguamos/laravel-kenya-mobile.svg?style=flat-square)](https://packagist.org/packages/njoguamos/laravel-kenya-mobile)

A rule for validating Kenyan mobile number.

## 1. Why use this package
1. Save time from implementing your own validation rule.
2. Tested with phone number approved by [Communications Authority of Kenya](https://www.ca.go.ke/wp-content/uploads/2023/01/Telecommunication-Numbering-Plan-for-Kenya-January-2023.pdf) supported.

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
| Carrier                   | Prefix                                           |
|---------------------------|--------------------------------------------------|
| Airtel Networks Kenya Ltd | 100, 101, 102, 103, 104, 105, 106                |
| Safaricom PLC             | 110, 111, 112, 113, 114, 115                     |
| Jambo Telcoms Ltd         | 120                                              |
| Infura Ltd                | 124                                              |
| Hidiga Investments Ltd    | 126                                              |
| Webtribe Ltd              | 128                                              |
| NRG Media Ltd             | 130                                              |
| Safaricom PLC             | 700, 701, 702, 703, 704, 705, 706, 707, 708, 709 |
| Safaricom PLC             | 710, 711, 712, 713, 714, 715, 716, 717, 718, 719 |
| Safaricom PLC             | 720, 721, 722, 723, 724, 725, 726, 727, 728, 729 |
| Airtel Networks Kenya Ltd | 730, 731, 732, 733, 734, 735, 736, 737, 738, 739 |
| Safaricom PLC             | 740, 741, 742, 743                               |
| Homelands Media Ltd       | 744                                              |
| Safaricom PLC             | 745, 746                                         |
| Jamii Telecoms Ltd        | 747                                              |
| Safaricom Ltd             | 748                                              |
| IEBC in KIEMS Kits        | 749                                              |
| Airtel Networks Kenya Ltd | 750, 751, 752, 753, 754, 755, 756                |
| Safaricom Ltd             | 757, 758, 759                                    |
| Mobile Pay Ltd            | 760                                              |
| Eferio Kenya Ltd          | 761                                              |
| Airtel Networks Kenya Ltd | 762                                              |
| Finserve Africa Ltd       | 763, 764, 765, 766                               |
| Airtel Networks Kenya Ltd | 767                                              |
| Safaricom PLC             | 768, 769                                         |
| Telkom Kenya Ltd          | 770, 771, 772, 773, 774, 775, 776, 777, 778, 779 |
| Airtel Networks Kenya Ltd | 780, 781, 782, 783, 784, 785, 786, 787, 788, 789 |
| Safaricom PLC             | 790, 791, 792, 793, 794, 795, 796, 797, 798, 799 |


## 4. Testing

```bash
composer test
```

## 5. Changelog

Please see [RELEASES](https://github.com/njoguamos/laravel-kenya-mobile/releases) for more information what has changed recently.

## 6. Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## 7. Security Vulnerabilities

If you discover any security related issues, please email njoguamos@gmail.com instead of using the issue tracker.

## 8. Credits

- [Njogu Amos](https://github.com/njoguamos)
- [All Contributors](../../contributors)

## 9. License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
