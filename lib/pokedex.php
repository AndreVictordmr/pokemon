<?php
    function infoPokemon($nome){
        $url = "https://pokeapi.co/api/v2/pokemon/$nome/";
        $dados = file_get_contents($url);
        $pokemon = json_decode($dados,true);
        return $pokemon;
    }