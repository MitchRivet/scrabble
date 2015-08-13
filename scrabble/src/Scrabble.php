<?php

    class Scrabble
    {

        function scoreScrabble($input)
        {
            include "scrabblevalues.php";

            $array_of_letters = str_split($input);

            $output_score = 0;

                if ($input == "")
                {
                    return "please enter a word";

                } elseif (array_intersect($array_of_letters, $non_letters)) {

                    return "please enter a word";
                }

                else {
                    foreach ($array_of_letters as $letter)
                    {

                        if (array_key_exists($letter, $letter_values))
                        {
                            $letter_value = $letter_values[$letter];

                        $output_score += $letter_value;

                        }

                    }
                }

                return $output_score;

        }
    }

?>
