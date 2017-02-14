<?php
    class Coin
    {
        function getCoinage($input, $goal)
        {
            $output_array = array();
            $change = $input;
            if($change >= 25 && $goal >= 25)
            {
                $quarters =(int)($change/25);
                array_push($output_array, $quarters);
                $change -= $quarters * 25;
            } else {
                array_push($output_array, 0);
            }
            if($change >= 10 && $goal >= 10)
            {
                $dimes = (int)($change/10);
                array_push($output_array, $dimes);
                $change -= $dimes * 10;
            } else {
                array_push($output_array, 0);
            }
            if($change >= 05 && $goal >= 5)
            {
                $nickels = (int)($change/05);
                array_push($output_array, $nickels);


                $change -= $nickels * 05;

            } else {
                array_push($output_array, 0);
            }

            if($change >= 01)
            {
                $pennies = (int) $change/01;

                array_push($output_array,  $pennies);

                $change -= $pennies * 01;

            } else {
                array_push($output_array, 0);
            }

                return $output_array;


        }
    }

?>
