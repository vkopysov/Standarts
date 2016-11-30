<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 30.11.16
 * Time: 16:08
 */

namespace Psr;


class MyTestClass
{
    const NUM_ARRAY = [0,1,2,3,4,5];

    public function findMin()
    {
        $minNum = self::NUM_ARRAY[0];

        for ($i = 1; $i < sizeof(self::NUM_ARRAY); $i++) {
            if (self::NUM_ARRAY[$i] < $minNum) {
                $minNum = self::NUM_ARRAY[$i];
            }

        }

        return $minNum;
    }

    public function findMin2()
    {
        $minNum = 0;

        for ($i = 0; $i < sizeof(self::NUM_ARRAY); $i++) {
            if ($i == sizeof(self::NUM_ARRAY)) {
                if (self::NUM_ARRAY[sizeof(self::NUM_ARRAY)] < $minNum) {
                    $minNum = self::NUM_ARRAY[sizeof(self::NUM_ARRAY)];
                }
            } elseif (self::NUM_ARRAY[$i] < self::NUM_ARRAY[$i+1]) {
                $minNum = self::NUM_ARRAY[$i];
            }

        }

        return $minNum;
    }

     /*переделать*/
    public function findMax()
    {
        $maxNum = 0;

        for ($i = 0; $i < sizeof(self::NUM_ARRAY); $i++) {
            if (self::NUM_ARRAY[$i] > self::NUM_ARRAY[$i-1]) {
                $maxNum = self::NUM_ARRAY[$i];
            }
        }

        return $maxNum;
    }
}

