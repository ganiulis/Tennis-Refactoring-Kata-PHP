<?php

namespace App;

use App\Factory\PlayerFactory;
use App\Model\Player;

class ConcreteTennisGame implements TennisGameInterface
{
    private Player $firstPlayer;
    private Player $secondPlayer;

    public function __construct(string $firstPlayerName, string $secondPlayerName)
    {
        $factory = new PlayerFactory();

        $this->firstPlayer = $factory->create($firstPlayerName, 0);
        $this->secondPlayer = $factory->create($secondPlayerName, 0);
    }

    public function wonPoint(string $winner): void
    {
        $winner === $this->firstPlayer->name ? $this->firstPlayer->score++ : $this->secondPlayer->score++;
    }

    public function getScore(): string
    {
        if ($this->secondPlayer->score === $this->firstPlayer->score) {
            if (2 < $this->firstPlayer->score) {
                return Scoreboard::deuce();
            }

            return Scoreboard::draw($this->firstPlayer);
        }

        if (4 > $this->firstPlayer->score && 4 > $this->secondPlayer->score) {
            return Scoreboard::simple($this->firstPlayer, $this->secondPlayer);
        }

        return Scoreboard::descriptive($this->firstPlayer, $this->secondPlayer);
    }
}
