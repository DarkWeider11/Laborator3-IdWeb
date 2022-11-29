<?php

use PHPUnit\Framework\TestCase;

require __DIR__ . "/../body.php";

class test1 extends TestCase
{
    function test()
    {
        $price = 100;
        $result = new reducere($price);
        $expectedResult = 90;

        $this->assertEquals($expectedResult, $result->calcReducere());
    }
}

?>