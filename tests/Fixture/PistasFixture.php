<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PistasFixture
 */
class PistasFixture extends TestFixture
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
                'idPista' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'distancia' => 1,
                'nivelDificuldade' => 1,
            ],
        ];
        parent::init();
    }
}
