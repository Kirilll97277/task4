<?php

class Regulations
{
    public function Rule_output($n)
    {
        $help = new AlgGame();
        for ($i=0; $i<=$n; $i++){
            for ($j=0; $j<=$n; $j++){
                if (($i==0) && ($j ==0))  {
                    echo "pl\pc   ";
                } elseif(($j==0) && ($i !=0)) {
                    echo $i . "|   ";
                }
                elseif(($i==0) && ($j !=0)) {
                    echo $j . "  |  ";
                }
                if(($i !=0) && ($j != 0)){
                    echo $help->Play($n, $i, $j-1) . " | ";
                }
            }
            echo "\n";

        }
    }
}