<?php
/**
 * Created by PhpStorm.
 * User: Mou
 * Date: 18/11/14
 * Time: 15:44
 */

namespace OKLM\StringGenerator;

class TextGenerator
{

    private static $words = array('lorem', 'ipsum', 'dolor', 'sit', 'amet');

    public function __construct()
    {

    }


    public static function generateText($length = 10)
    {
        $words = self::$words;
        $text = '';

        for ($i = 0; $i < $length; $i++){
            $text .= ' '.array_rand(array_flip($words));
        }
        return $text;

    }
}