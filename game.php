<?php
include 'KeyGen.php';
include 'AlgGame.php';
include 'Regulations.php';
$a = true;
$choices = array_slice($argv,1);
$combinations = count($choices);
echo $combinations;
    if (($combinations % 2) != 0 and (1 < $combinations))
    {
        while ($a == true) {
            $game = new AlgGame();
            $game->setComputer(rand(0, $combinations - 1));
            $key = new KeyGen();
            $key->setKey();
            echo 'HMAC: ' . $key->computationHmac($game->getComputer(), $key->generateKey()) . "\n";
            echo 'Available moves:' . "\n";
            for($i=1; $i<=$combinations; $i++)
            {
                echo $i . '-' . $choices[$i-1] . "\n";
            }
            echo '0 - exit' . "\n" . '? - help' . "\n";
            $player = readline('Your move: ');
            if($player == 0)
            {
                $a = false;

            }
            elseif ($combinations >= $player)
            {
                $game->setPlayer($player);
                $result = $game->toPlay($combinations, $player, $game->getComputer());
                $pc = $game->getComputer();
                $pc++;
                echo 'Computer move: ' . $pc . "\n";
                echo $result . "\n";
                echo 'HMAC key: ' . $key->getKey() . "\n";
            }
            elseif ($player == '?'){
                $help = new Regulations();
                $help->ruleOutput($combinations);
            }else
            {
                echo 'not correct' . "\n";
            }
        }
    }
    else
    {
        echo 'wrong number of elements(example: rock paper scissors lizard spock)' . "\n";
    }
