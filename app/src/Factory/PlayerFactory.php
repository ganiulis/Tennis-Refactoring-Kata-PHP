<?php

declare(strict_types=1);

namespace App\Factory;

use App\Model\Player;

class PlayerFactory
{
    public function create(string $name, int $score): Player
    {
        $player = new Player();
        $player->name = $name;
        $player->score = $score;

        return $player;
    }
}
