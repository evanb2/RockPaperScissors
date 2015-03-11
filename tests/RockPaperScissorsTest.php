<?php
    require_once "src/RockPaperScissor.php";

    class RockPaperScissorTest extends PHPUnit_Framework_TestCase
    {
        function test_Draw()
        {
            //Arrange
            $test_draw = new RockPaperScissor;
            $player1 = "rock";
            $player2 = "rock";

            //Act
            $result = $test_draw->gameRockPaperScissor($player1, $player2);

            //Assert
            $this->assertEquals("Draw", $result);

        }

        function test_RockPaper()
        {
            //Arrange
            $test_rockpaper = new RockPaperScissor;
            $player1 = "rock";
            $player2 = "paper";

            //Act
            $result = $test_rockpaper->gameRockPaperScissor($player1, $player2);

            //Assert
            $this->assertEquals("Player 2", $result);
        }
    }
?>
