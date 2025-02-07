<?php

use Src\Model\{Usuario, Lance, Leilao, Avaliador, Teste};

require_once __DIR__ . "/vendor/autoload.php";


$leilao = new Leilao("Fiat 147 0KM");

$maria = new Usuario("Maria");
$joao = new Usuario("Joao");

$leilao->recebeLance(
    new Lance($joao, 5000)
);

$leilao->recebeLance(
    new Lance($maria, 3000)
);


$leioeiro = new Teste();

$leioeiro->avalia($leilao);

$maiorValor = $leioeiro->getMaiorValor();

echo $maiorValor;

