# StringGenerator

This Lib can be generate strings like password or ipsum

## Password

This lib generates passwords

```php
<?php

require __DIR__.'/vendor/autoload.php';

echo \OKLM\StringGenerator\PasswordGenerator::generatePassword(11, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_EASY);

```