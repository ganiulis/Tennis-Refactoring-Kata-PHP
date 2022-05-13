<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use App\Model\Player;
use App\Scoreboard;
use PHPUnit\Framework\TestCase;

class ScoreboardTest extends TestCase
{
    public function testDeuce_should_returnDeuce(): void
    {
        self::assertSame('Deuce', Scoreboard::deuce());
    }

    public function testDraw_should_returnAll(): void
    {
        self::assertSame('Fifteen-All', Scoreboard::draw($this->mockPlayer(score: 1)));
    }

    public function testSimple(): void
    {
        self::assertSame(
            'Thirty-Fifteen',
            Scoreboard::simple($this->mockPlayer(score: 2), $this->mockPlayer(score: 1))
        );

        self::assertSame(
            'Love-Forty',
            Scoreboard::simple($this->mockPlayer(score: 0), $this->mockPlayer(score: 3))
        );
    }

    public function testDescriptive_should_returnAdvantage(): void
    {
        self::assertSame(
            'Advantage foo',
            Scoreboard::descriptive($this->mockPlayer(score: 2, name: 'foo'), $this->mockPlayer(score: 1, name: 'bar'))
        );
    }

    public function testDescriptive_should_returnWin(): void
    {
        self::assertSame(
            'Win for zim',
            Scoreboard::descriptive($this->mockPlayer(score: 4, name: 'zim'), $this->mockPlayer(score: 1, name: 'gir'))
        );
    }

    private function mockPlayer(int $score, string $name = ''): Player
    {
        $player = $this->createMock(Player::class);
        $player->name = $name;
        $player->score = $score;

        return $player;
    }
}
