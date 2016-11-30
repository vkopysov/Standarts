<?php

/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 30.11.16
 * Time: 15:09
 */
class TestPhp
{
    const FIRST_NUM = 10;
    const SECOND_NUM = -20;


    public function compareNum()
    {
        if (self::FIRST_NUM > self::SECOND_NUM) {
            echo self::FIRST_NUM."больше";
        } else {
            echo self::SECOND_NUM."больше";
        }
    }
}
