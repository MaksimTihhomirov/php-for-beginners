
<?php

require_once __DIR__ . '/../../Validator.php';

use Core\Validator;

it('checks if a number is greater than another number', function () {
    expect(Validator::greaterThan(10, 5))->toBeTrue();
    expect(Validator::greaterThan(3, 5))->toBeFalse();
});
