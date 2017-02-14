<?php
    class Coin
    {
        function getCoinage($input)
        {
            $output_array = array();
            $change = $input;
            if($change > 0.25)
            {
                array_push($output_array, floor($change/0.25));
                $change -= floor($change/0.25);
            }
            return $output_array;
        }
    }
?>
