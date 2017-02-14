<?php
    class Coin
    {
        function getCoinage($input)
        {
            $output_array = array();
            $change = $input;
            if($change > 0.25)
            {
                $quarters =floor($change/0.25);
                array_push($output_array, (int) $quarters);
                $change -= $quarters * 0.25;
            }
            if($change > 0.10)
            {
                $dimes = floor($change/0.10);
                array_push($output_array, (int) $dimes);
                $change -= $dimes * 0.10;
            }
            if($change > 0.05)
            {
                $nickels = floor($change/0.05);
                array_push($output_array, (int) $nickels);
                $change -= $nickels * 0.05;
            }

            return $output_array;
        }
    }
?>
