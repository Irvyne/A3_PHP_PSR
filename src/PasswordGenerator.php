<?php
/**
 * Created by PhpStorm.
 * User: Mou
 * Date: 18/11/14
 * Time: 15:44
 */

namespace OKLM\StringGenerator;

class PasswordGenerator
{
    const PASSWORD_CHAR_STRENGTH_EASY = 'abcdefghijklmnopqrstuvwxyz';
    const PASSWORD_CHAR_STRENGTH_MEDIUM = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    const PASSWORD_CHAR_STRENGTH_HARD = '$€£%!@#&éè';

    private static $strengthEasy = 'abcdefghijklmnopqrstuvwxyz';
    private static $strengthMedium = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    private static $strengthHard = '$€£%!@#&éè';

    const PASSWORD_EASY = 1;
    const PASSWORD_MEDIUM = 2;
    const PASSWORD_HARD = 3;

    public function __construct()
    {

    }


    public static function generate($length = 10, $strenght)
    {
        if(!in_array($strenght, [
            self::PASSWORD_EASY,
            self::PASSWORD_MEDIUM,
            self::PASSWORD_HARD,
        ])) {
            throw new \Exception('Invalid strenght');
        }

        switch($strenght){
            case self::PASSWORD_EASY:
                $string = self::$strengthEasy;
                break;
            case self::PASSWORD_MEDIUM:
                $string = self::$strengthEasy.self::$strengthMedium;
                break;
            case self::PASSWORD_HARD:
                $string = self::$strengthEasy.self::$strengthMedium.self::$strengthHard;
                break;
        }

        $password = '';

        for ($i = 0; $i < $length; $i++){
            $password .= mb_substr($string, mt_rand(0, mb_strlen($string)-1), 1);
        }

        return $password;
    }
}