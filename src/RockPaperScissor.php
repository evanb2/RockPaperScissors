<?php
    class RockPaperScissor
    {
        function gameRockPaperScissor($player1, $player2)
        {
            if ($player1 == $player2) {
                return "Draw";
            } elseif (($player1 == "rock" && $player2 == "paper") || ($player1 == "paper" && $player2 == "scissors") || ($player1 == "scissors" && $player2 == "rock")) {
                return "Player 2";
            } else {
                return "Player 1";
            }

        }
    }
?>
