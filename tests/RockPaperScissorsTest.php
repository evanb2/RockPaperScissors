<?php
    require_once "src/RockPaperScissor.php";

    class RockPaperScissorTest extends PHPUnit_Framework_TestCase
    {
        function testRockPaper()
        {
            //Arrange
            $test_rockpaper = new RockPaperScissor;
            $player1 = "rock";
            $player2 = "paper";

            //Act
            $result = $test_rockpaper->rockPaperScissor($player1, $player2);

            //Assert
            $this->assertEquals("Player 2", $result);
        }
    }
?>
