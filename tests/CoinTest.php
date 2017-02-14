<?php
    require_once "src/Coin.php";
    Class CoinTest extends PHPUnit_Framework_TestCase
    {
        function test_quarters()
        {
            $test_Coin = new Coin;
            $input1 = 0.46;

            $result = $test_Coin->getCoinage($input1);
            $this->assertEquals([1], $result);
        }
    }
?>
