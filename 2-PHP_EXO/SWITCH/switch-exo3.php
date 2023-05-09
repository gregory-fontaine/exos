<?php

/*

traduire les blocs conditionnels `if` en blocs conditionnels `switch`

résultat attendu :
$variable est un nombre entier
$variable est une chaîne de caractères
$variable est un nombre à virgule flottante
$variable est un objet
$variable a la valeur null

*/

$variable = 42;

switch (true) {
    case is_int($variable):
        echo '$variable est un nombre entier';
        echo PHP_EOL;
        break;
    case is_string($variable):
        echo '$variable est une chaîne de caractères';
        echo PHP_EOL;
        break;
    case is_float($variable):
        echo '$variable est un nombre à virgule flottante';
        echo PHP_EOL;
        break;
    case is_object($variable):
        echo '$variable est un objet';
        echo PHP_EOL;
        break;
    case is_null($variable):
        echo '$variable a la valeur NULL';
        echo PHP_EOL;
        break;
}

// if (is_int($variable)) {
//     echo '$variable est un nombre entier';
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo '$variable est une chaîne de caractères';
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo '$variable est un nombre à virgule flottante';
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo '$variable est un objet';
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo '$variable a la valeur NULL';
//     echo PHP_EOL;
// }

$variable = 'greg';

switch (true) {
    case is_int($variable):
        echo '$variable est un nombre entier';
        echo PHP_EOL;
        break;
    case is_string($variable):
        echo '$variable est une chaîne de caractères';
        echo PHP_EOL;
        break;
    case is_float($variable):
        echo '$variable est un nombre à virgule flottante';
        echo PHP_EOL;
        break;
    case is_object($variable):
        echo '$variable est un objet';
        echo PHP_EOL;
        break;
    case is_null($variable):
        echo '$variable a la valeur NULL';
        echo PHP_EOL;
        break;
}

// if (is_int($variable)) {
//     echo '$variable est un nombre entier';
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo '$variable est une chaîne de caractères';
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo '$variable est un nombre à virgule flottante';
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo '$variable est un objet';
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo '$variable a la valeur NULL';
//     echo PHP_EOL;
// }

$variable = 4.2;

switch (true) {
    case is_int($variable):
        echo '$variable est un nombre entier';
        echo PHP_EOL;
        break;
    case is_string($variable):
        echo '$variable est une chaîne de caractères';
        echo PHP_EOL;
        break;
    case is_float($variable):
        echo '$variable est un nombre à virgule flottante';
        echo PHP_EOL;
        break;
    case is_object($variable):
        echo '$variable est un objet';
        echo PHP_EOL;
        break;
    case is_null($variable):
        echo '$variable a la valeur NULL';
        echo PHP_EOL;
        break;
}

// if (is_int($variable)) {
//     echo '$variable est un nombre entier';
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo '$variable est une chaîne de caractères';
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo '$variable est un nombre à virgule flottante';
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo '$variable est un objet';
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo '$variable a la valeur NULL';
//     echo PHP_EOL;
// }

$variable = new stdClass();

switch (true) {
    case is_int($variable):
        echo '$variable est un nombre entier';
        echo PHP_EOL;
        break;
    case is_string($variable):
        echo '$variable est une chaîne de caractères';
        echo PHP_EOL;
        break;
    case is_float($variable):
        echo '$variable est un nombre à virgule flottante';
        echo PHP_EOL;
        break;
    case is_object($variable):
        echo '$variable est un objet';
        echo PHP_EOL;
        break;
    case is_null($variable):
        echo '$variable a la valeur NULL';
        echo PHP_EOL;
        break;
}

// if (is_int($variable)) {
//     echo '$variable est un nombre entier';
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo '$variable est une chaîne de caractères';
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo '$variable est un nombre à virgule flottante';
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo '$variable est un objet';
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo '$variable a la valeur NULL';
//     echo PHP_EOL;
// }

$variable = null;

switch (true) {
    case is_int($variable):
        echo '$variable est un nombre entier';
        echo PHP_EOL;
        break;
    case is_string($variable):
        echo '$variable est une chaîne de caractères';
        echo PHP_EOL;
        break;
    case is_float($variable):
        echo '$variable est un nombre à virgule flottante';
        echo PHP_EOL;
        break;
    case is_object($variable):
        echo '$variable est un objet';
        echo PHP_EOL;
        break;
    case is_null($variable):
        echo '$variable a la valeur NULL';
        echo PHP_EOL;
        break;
}

// if (is_int($variable)) {
//     echo '$variable est un nombre entier';
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo '$variable est une chaîne de caractères';
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo '$variable est un nombre à virgule flottante';
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo '$variable est un objet';
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo '$variable a la valeur null';
//     echo PHP_EOL;
// }
