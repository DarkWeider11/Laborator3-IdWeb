<?php

use PHPUnit\Framework\TestCase;

class test3 extends TestCase
{
    function test()
    {
        $con = new mysqli("localhost", "root", "", "onlineshop");

        $query = "SELECT * FROM user_info where email = 'venkey@gmail.com' and password = '1234534'";

        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run)) {
            $result = true;
        } else {
            $result = false;
        }

        $this->assertTrue($result);
    }
}