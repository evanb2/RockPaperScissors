<?php
    class RockPaperScissor
    {
        function gameRockPaperScissor($player1, $player2)
        {
            if ($player1 == null || $player2 == null) {
                return "Ooops you forgot to enter a value";
            } elseif (($player1 == "rock" && $player2 == "paper") || ($player1 == "paper" && $player2 == "scissors") || ($player1 == "scissors" && $player2 == "rock")) {
                return "Player 2 Wins!";
            } elseif ($player1 == $player2) {
                return "Draw";
            } else {
                return "Player 1 Wins!";
            }

        }
    }
?>
