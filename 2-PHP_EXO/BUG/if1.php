<?php

// Écrivez un bloc `if` qui affiche si la variable suivante est :
//     - plus grande que 10
//     - plus petite que 10
//     - égale à 10

$nombre = 20;

if ($nombre > 10) {
    echo '- plus grande que 10';
} elseif ($nombre < 10) {
    echo '- plus petit que 10';
} else {
    echo '- égale à 10';
}
