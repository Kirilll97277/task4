<?php

class AlgGame
{
    private $player;

    public function setPlayer($player): int
    {
        $this->player=$player;

        return $this->player;
    }

    public function getPlayer(): int
    {
        return $this->player;
    }

    private $computer;

    public function setComputer($computer): int
    {
        $this->computer=$computer;

        return $this->computer;
    }

    public function getComputer(): string
    {
        return $this->computer;
    }

    public function toPlay($length, $playerMove, $computerMove)
    {
        $middlePoint = $length / 2;
        $differ = ($playerMove >= $computerMove + 1)?($length - ($playerMove - ($computerMove + 1))):($computerMove + 1 - $playerMove);

        return ($differ == 0 || $differ == $length)?'draw': (($differ <= $middlePoint)?'win':'lose');
    }

}