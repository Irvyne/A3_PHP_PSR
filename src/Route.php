<?php
/**
 * Created by PhpStorm.
 * User: Mou
 * Date: 20/11/14
 * Time: 16:51
 */

namespace OKLM\StringGenerator;

class Route
{
    public function __construct()
    {

    }

    public static function Route($name)
    {
        $dir = getcwd().'/template';
        $files1 = scandir($dir);
        print_r($files1);

        echo $files1[4];
    }
}