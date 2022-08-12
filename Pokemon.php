<?php

class Pokemon {
    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function exibirTodos(): array
    {
        $resultado = $this->mysql->query('SELECT * FROM pokemons');
        $pokemons = $resultado->fetch_all(MYSQLI_ASSOC);

        return $pokemons;
    }
}