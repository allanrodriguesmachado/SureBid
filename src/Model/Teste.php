<?php

namespace Src\Model;

class Teste
{
    private  float|int $maiorValor = 0;
    public function avalia(Leilao $leilao): void
    {
//         foreach ($leilao->getLances() AS $leilao) {
//             dd($leilao);
//             // if ($this->maiorValor > $leilao->getValor()) {
//             //     dd([
//             //         $$leilao->getValor()
//             //     ]);
//             //     $this->maiorValor = $leilao->getValor();
//             // }
//         }

// // exit();

        $lances = $leilao->getLances();

        foreach ($lances as $lance) {
            dd($lance);
        }


        $ultimoLance = $lances[count($lances) - 1];

        $this->maiorValor = $ultimoLance->getValor();
    }

    public function getMaiorValor(): float
    {
        return $this->maiorValor;
    }
}
