
<?php

$mysql = mysqli_connect('localhost', 'pokedexadmin', 'root', 'pokedex');
$mysql->set_charset('utf8');

if (!$mysql) {
    echo 'banco não conectado';
}