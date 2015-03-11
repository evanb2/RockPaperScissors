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

        function test_PaperScissors()
        {
            //Arrange
            $test_paperscissors = new RockPaperScissor;
            $player1 = "paper";
            $player2 = "scissors";

            //Act
            $result = $test_paperscissors->gameRockPaperScissor($player1, $player2);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_ScissorsRock()
        {
            //Arrange
            $test_scissorsrock = new RockPaperScissor;
            $player1 = "scissors";
            $player2 = "rock";

            //Act
            $result = $test_scissorsrock->gameRockPaperScissor($player1, $player2);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_RockScissors()
        {
            //Arrange
            $test_rockscissors = new RockPaperScissor;
            $player1 = "rock";
            $player2 = "scissors";

            //Act
            $result = $test_rockscissors->gameRockPaperScissor($player1, $player2);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_PaperRock()
        {
            //Arrange
            $test_paperrock = new RockPaperScissor;
            $player1 = "paper";
            $player2 = "rock";

            //Act
            $result = $test_paperrock->gameRockPaperScissor($player1, $player2);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
    }
?>
