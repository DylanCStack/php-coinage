<?php
    require_once "src/Coin.php";
    Class CoinTest extends PHPUnit_Framework_TestCase
    {

        function test_quarters()
        {
            $test_Coin = new Coin;
            $input1 = 43;
            $goal = 25;


            $result = $test_Coin->getCoinage($input1, $goal);
            $this->assertEquals([1,1,1,3], $result);
        }
        function test_dimes()
        {
            $test_Coin = new Coin;
            $input1 = 43;
            $goal = 25;


            $result = $test_Coin->getCoinage($input1, $goal);
            $this->assertEquals([1,1,1,3], $result);
        }
        function test_nickels()
        {
            $test_Coin = new Coin;
            $input1 = 43;
            $goal = 25;


            $result = $test_Coin->getCoinage($input1, $goal);
            $this->assertEquals([1,1,1,3], $result);
        }
        function test_pennies()
        {
            $test_Coin = new Coin;
            $input1 = 43;
            $goal = 10;

            $result = $test_Coin->getCoinage($input1, $goal);
            $this->assertEquals([0,4,0,3], $result);
        }
    }
?>
