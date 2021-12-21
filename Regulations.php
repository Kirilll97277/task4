<?php

class Regulations
{
    public function ruleOutput($size)
    {
        $help = new AlgGame();

        for ($i=0; $i<=$size; $i++){
            for ($j=0; $j<=$size; $j++){
                if ($i==0 && $j ==0)  {
                    echo "pl\pc   ";
                } elseif($j==0 && $i !=0) {
                    echo $i . "|   ";
                }
                elseif($i==0 && $j !=0) {
                    echo $j . "  |  ";
                }
                if(($i !=0) && ($j != 0)){
                    echo $help->toPlay($size, $i, $j-1) . " | ";
                }
            }
            echo "\n";
        }
    }
}