<?php

namespace App;

interface TennisGameInterface
{
    public function wonPoint(string $winner): void;

    public function getScore(): string;
}
