<?php

$age = 25;
$nom =  "anonymouse";
$fruits = ['pomme','banane','orange'];
$estMajeur = ($age >= 18);

echo "age: " . $age . PHP_EOL;
echo "age: " . $nom . PHP_EOL;

foreach ($fruits as $fruit)
    {
        echo "fruit: " . $fruit . PHP_EOL;
    }


echo $estMajeur ? 'oui' : 'non';






