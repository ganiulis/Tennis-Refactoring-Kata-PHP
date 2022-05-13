<?php

declare(strict_types=1);

namespace App;

use App\Model\Player;

class Scoreboard
{
    private const SCORES = [
        'Love',
        'Fifteen',
        'Thirty',
        'Forty',
    ];

    public static function simple(Player $firstPlayer, Player $secondPlayer): string
    {
        return self::makeBoard(self::SCORES[$firstPlayer->score], self::SCORES[$secondPlayer->score]);
    }

    public static function descriptive(Player $firstPlayer, Player $secondPlayer): string
    {
        return sprintf(
            '%s %s',
            1 === abs($secondPlayer->score - $firstPlayer->score) ? 'Advantage' : 'Win for',
            $firstPlayer->score > $secondPlayer->score ? $firstPlayer->name : $secondPlayer->name
        );
    }

    public static function deuce(): string
    {
        return 'Deuce';
    }

    public static function draw(Player $player): string
    {
        return self::makeBoard(self::SCORES[$player->score], 'All');
    }

    private static function makeBoard(string $firstScore, string $secondScore): string
    {
        return sprintf('%s-%s', $firstScore, $secondScore);
    }
}
