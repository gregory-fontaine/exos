<?php

// Écrivez une fonction qui calcul le nombre de places libres dans un parking
// Affichez dans la console le résultat renvoyé par la fonction

function places_restantes(int $nb1, int $nb2): int {
    return $nb1 - $nb2;
}

$nombre_places_parking = 42;
$nombres_voitures = rand(0, $nombre_places_parking);

echo "nombre_places_parking = $nombre_places_parking";
echo PHP_EOL;
echo "nombres_voitures = $nombres_voitures";
echo PHP_EOL;

$placesvides = places_restantes($nombre_places_parking, $nombres_voitures);
echo "nombre_places_restantes = $placesvides";