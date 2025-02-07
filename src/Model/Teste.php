<?php

namespace Src\Model;

use Src\Model;

class Teste
{
    private  $maiorValor;
    public function avalia(Leilao $leilao)
    {
        $lances = $leilao->getLances();


        $ultimoLance = $lances[count($lances) - 1];

        $this->maiorValor = $ultimoLance->getValor();
    }

    public function getMaiorValor()
    {
        return $this->maiorValor;
    }
}
