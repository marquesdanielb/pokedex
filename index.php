<?php

$url = "https://www.canalti.com.br/api/pokemons.json";
$pokemonJson = file_get_contents($url);
$pokemons = json_decode($pokemonJson, false);