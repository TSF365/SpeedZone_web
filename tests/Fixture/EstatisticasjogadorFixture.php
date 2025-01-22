<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstatisticasjogadorFixture
 */
class EstatisticasjogadorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'estatisticasjogador';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idEstatistica' => 1,
                'idJogador' => 1,
                'idPista' => 1,
                'idVeiculo' => 1,
                'melhorTempo' => 1,
                'pistasUsadas' => 1,
                'corridasGanhas' => 1,
            ],
        ];
        parent::init();
    }
}
