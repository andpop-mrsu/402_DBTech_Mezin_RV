<?php

namespace Staticnur\Hangman\Controller;

use Staticnur\Hangman\Model\Game;
use Staticnur\Hangman\View\GameView;

class GameController {
    private $game;

    public function __construct() {
        $this->game = new Game();
    }

    public function startNewGame(): void {
        $word = $this->game->getRandomWord();
        $this->game->start($word);
        $this->playGame();
    }

    private function playGame(): void {
        while (!$this->game->isGameOver()) {
            GameView::showGameState($this->game);
            $guess = readline("Enter a letter or the whole word: ");
            $this->game->makeGuess($guess);
        }
        GameView::showGameResult($this->game);
    }
}