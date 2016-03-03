<?php
/**
 * Created by PhpStorm.
 * User: chester
 * Date: 03.03.2016
 * Time: 21:10
 */
function factorial ($n)
{
    if($n <= 1)
    {
        return 1;
    }
    else
    {
        return $n * factorial($n - 1);
    }
}

echo factorial(4);
