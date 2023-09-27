<?php

include_once __DIR__ . "/../../vendor/autoload.php";
use App\model\Usuario;

$u = new Usuario("Peachisa", 19);

$attr = $_GET["atributo"];

if ($attr == "nome") {
    echo $u->getNome();
}

if ($attr == "idade") {
    echo $u->getIdade();
}

