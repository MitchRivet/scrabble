<?php

    class Scrabble
    {

        function scoreScrabble($input)
        {
            $letter_values =
            array(
                    "a" => 1,
                    "i" => 1,
                    "f" => 4
            );


                $array_of_letters = str_split($input);

                $output_score = 0;

                foreach ($array_of_letters as $letter)
                {

                    if (array_key_exists($letter, $letter_values))
                    {
                        $letter_value = $letter_values[$letter];

                    $output_score += $letter_value;

                    }

                }

                return $output_score;

        }
    }

?>
