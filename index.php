<?php

require __DIR__.'/vendor/autoload.php';

header('Content-Type: text/html; charset=utf-8');

//$slugify = new \Cocur\Slugify\Slugify();
//echo $slugify->slugify('Salut comment ça va');

//new \OKLM\StringGenerator\PasswordGenerator();


echo \OKLM\StringGenerator\PasswordGenerator::generate(11, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_EASY);


