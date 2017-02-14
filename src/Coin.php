<?php
    class Coin
    {
        function getCoinage($input)
        {
            $output_array = array();
            $change = $input;
            if($change >= 25)
            {
                $quarters =(int)($change/25);
                array_push($output_array, $quarters);
                $change -= $quarters * 25;
            } else {
                array_push($output_array, 0);
            }
            if($change >= 10)
            {
                $dimes = (int)($change/10);
                array_push($output_array, $dimes);
                $change -= $dimes * 10;
            } else {
                array_push($output_array, 0);
            }
            if($change >= 05)
            {
                $nickels = (int)($change/05);
                array_push($output_array, $nickels);

                var_dump($change);
                var_dump($nickels);
                $change -= $nickels * 05;
                var_dump($change);
            } else {
                array_push($output_array, 0);
            }

            if($change >= 01)
            {
                $pennies = (int) $change/01;
                var_dump($pennies);
                array_push($output_array,  $pennies);
                var_dump($change);
                var_dump($pennies);
                $change -= $pennies * 01;
                var_dump($change);
            } else {
                array_push($output_array, 0);
            }

                return $output_array;


        }
    }

    $coin = new Coin;
    $coin->getCoinage(43);
?>
