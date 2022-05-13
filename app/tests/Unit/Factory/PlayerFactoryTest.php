<?php

declare(strict_types=1);

namespace App\Tests\Unit\Factory;

use App\Factory\PlayerFactory;
use PHPUnit\Framework\TestCase;

class PlayerFactoryTest extends TestCase
{
    private PlayerFactory $factory;

    protected function setUp(): void
    {
        $this->factory = new PlayerFactory();
    }

    public function testCreate_should_returnPlayer(): void
    {
        $player = $this->factory->create('foo', 2);

        self::assertSame('foo', $player->name);
        self::assertSame(2, $player->score);
    }
}
