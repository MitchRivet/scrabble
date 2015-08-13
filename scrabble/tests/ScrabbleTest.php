<?php

        require_once "src/Scrabble.php";

        class ScrabbleTest extends PHPUnit_Framework_TestCase
        {

                function test_scoreScrabble_oneLetter()
                {
                    //Arrange
                    $test_Scrabble = new Scrabble;
                    $input = "a";

                    //Act
                    $result = $test_Scrabble->scoreScrabble($input);

                    //Assert
                    $this->assertEquals(1, $result);
                }
        }

?>
