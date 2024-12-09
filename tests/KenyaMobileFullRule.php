<?php

use NjoguAmos\KeMobile\KenyaMobileFullRule;

beforeEach(closure: function () {
    $this->rule = new KenyaMobileFullRule;
});

test(description: 'it fails for a phone with nine digits', closure: function () {
    expect(value: $this->rule)->not()->toPassWith(value: 700_325_008);
});

test(description: 'it fails for a phone with ten digits', closure: function () {
    expect(value: $this->rule)->not()->toPassWith('0700325008');
});

test(description: 'it passes for approved Communication Authority of Kenya telephony code series', closure: function (int $prefix) {
    $number = '254'.$prefix.random_int(min: 100_000, max: 999_999);

    expect(value: $this->rule)->toPassWith($number);
})->with([
    'Airtel Networks Kenya Ltd 10x' => [100, 101, 102, 103, 104, 105, 106],
    'Safaricom PLC 11x' => [110, 111, 112, 113, 114, 115],
    'Jambo Telcoms Ltd 12x' => [120],
    'Infura Ltd 12x' => [124],
    'Hidiga Investments Ltd 12x' => [126],
    'Webtribe Ltd 12x' => [128],
    'NRG Media Ltd 13x' => [130],
    'Safaricom PLC 70x' => [700, 701, 702, 703, 704, 705, 706, 707, 708, 709],
    'Safaricom PLC 71x' => [710, 711, 712, 713, 714, 715, 716, 717, 718, 719],
    'Safaricom PLC 72x' => [720, 721, 722, 723, 724, 725, 726, 727, 728, 729],
    'Airtel Networks Kenya Ltd 73x' => [730, 731, 732, 733, 734, 735, 736, 737, 738, 739],
    'Safaricom PLC 74x' => [740, 741, 742, 743, 745, 746, 748],
    'Homelands Media Ltd 74x' => [744],
    'Jamii Telecoms Ltd 74x' => [747],
    'IEBC in KIEMS Kits 74x' => [749],
    'Airtel Networks Kenya Ltd 75x' => [750, 751, 752, 753, 754, 755, 756],
    'Safaricom Ltd 75x' => [757, 758, 759],
    'Mobile Pay Ltd 76x' => [760],
    'Eferio Kenya Ltd 76x' => [761],
    'Airtel Networks Kenya Ltd 76x' => [762, 767],
    'Finserve Africa Ltd' => [763, 764, 765, 766],
    'Safaricom PLC 76x' => [768, 769],
    'Telkom Kenya Ltd 77x' => [770, 771, 772, 773, 774, 775, 776, 777, 778, 779],
    'Airtel Networks Kenya Ltd 78x' => [780, 781, 782, 783, 784, 785, 786, 787, 788, 789],
    'Safaricom PLC 79x' => [790, 791, 792, 793, 794, 795, 796, 797, 798, 799],
]);

test(description: 'it fails with invalid numbers', closure: function (int|string $number) {
    expect(value: $this->rule)->not()->toPassWith($number);
})->with([
    'Short numbers' => [1, 12, 123, 1234, 12345, 123456, 1234567, 1234567],
    'Numbers with plus' => ['+254700325008'],
    'Foreign numbers' => ['+18143519590', 18143519590],
    'Long numbers' => [70032500898424],
    'Tool free' => [800_000_432],
]);
