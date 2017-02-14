<?php
    require_once "src/Coin.php";
    Class CoinTest extends PHPUnit_Framework_TestCase
    {
        function test_quarters()
        {
            $test_Coin = new Coin;
            $input1 = 0.43;

            $result = $test_Coin->getCoinage($input1);
            $this->assertEquals([1,1,1], $result);
        }
        function test_dimes()
        {
            $test_Coin = new Coin;
            $input1 = 0.43;

            $result = $test_Coin->getCoinage($input1);
            $this->assertEquals([1,1,1], $result);
        }
        function test_nickels()
        {
            $test_Coin = new Coin;
            $input1 = 0.43;

            $result = $test_Coin->getCoinage($input1);
            $this->assertEquals([1,1,1], $result);
        }

    }
?>
