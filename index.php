<?php

require __DIR__.'/vendor/autoload.php';

header('Content-Type: text/html; charset=utf-8');

//$slugify = new \Cocur\Slugify\Slugify();
//echo $slugify->slugify('Salut comment ça va');

//new \OKLM\StringGenerator\PasswordGenerator();



//echo \OKLM\StringGenerator\PasswordGenerator::generatePassword(11, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_EASY);

echo \OKLM\StringGenerator\TextGenerator::generateText(15);

echo \OKLM\StringGenerator\Route::Route();