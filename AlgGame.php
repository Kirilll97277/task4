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

    public function Play($leng, $pl, $pc)
    {
        $differ=0;
        $middlePoint = $leng / 2;

        if ($pl >= $pc + 1)  {
            $differ = $leng - ($pl - ($pc + 1));
        }
        else if ($pl < $pc + 1)  {
            $differ = ($pc + 1 - $pl);
        }

        if ($differ == 0 || $differ == $leng) return "draw";
        else if ($differ <= $middlePoint) {
            return "win";
        }
        else return "lose";
    }

}