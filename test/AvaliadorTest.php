<?php

namespace Src\test;

use PHPUnit\Framework\TestCase;
use Src\Model\{Usuario, Lance, Leilao, Avaliador, Teste};

class AvaliadorTest extends TestCase
{
    public function testAvaliador()
    {
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

        self::assertEquals(3000, $maiorValor);
    }
}
