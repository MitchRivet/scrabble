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

                function test_scoreScrabble_twoLetter()
                {
                    //Arrange
                    $test_Scrabble = new Scrabble;
                    $input = "if";

                    //Act
                    $result = $test_Scrabble->scoreScrabble($input);

                    //Assert
                    $this->assertEquals(5, $result);
                }

                function test_scoreScrabble_blankInput()
                {
                    //Arrange
                    $test_Scrabble = new Scrabble;
                    $input = "";

                    //Act
                    $result = $test_Scrabble->scoreScrabble($input);

                    //Assert
                    $this->assertEquals("please enter a word", $result);
                }

                function test_scoreScrabble_numberInput()
                {
                    //Arrange
                    $test_Scrabble = new Scrabble;
                    $input = "beg1";

                    //Act
                    $result = $test_Scrabble->scoreScrabble($input);

                    //Assert
                    $this->assertEquals("please enter a word", $result); 
                }

        }

?>
