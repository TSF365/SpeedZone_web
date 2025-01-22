<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HistoricocorridasFixture
 */
class HistoricocorridasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idCorrida' => 1,
                'idJogador' => 1,
                'idPista' => 1,
                'idVeiculo' => 1,
                'tempoFinal' => 1,
                'dataCorrida' => '2025-01-15 10:53:35',
                'pontuacaocorrida' => 1,
            ],
        ];
        parent::init();
    }
}
