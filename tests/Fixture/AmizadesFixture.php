<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AmizadesFixture
 */
class AmizadesFixture extends TestFixture
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
                'idJogador1' => 1,
                'idJogador2' => 1,
                'dataAmizade' => '2025-01-15',
            ],
        ];
        parent::init();
    }
}
