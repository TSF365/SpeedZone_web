<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VeiculosFixture
 */
class VeiculosFixture extends TestFixture
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
                'idVeiculo' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'velocidadeMaxima' => 1,
                'aceleracao' => 1,
                'manobralidade' => 1,
                'categoria' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
