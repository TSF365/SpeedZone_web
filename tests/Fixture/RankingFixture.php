<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RankingFixture
 */
class RankingFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'ranking';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idRanking' => 1,
                'idJogador' => 1,
                'pontuacaoTotal' => 1,
                'posicao' => 1,
                'dataAtualizacao' => '2025-01-15 10:51:54',
            ],
        ];
        parent::init();
    }
}
