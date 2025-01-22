<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipouserFixture
 */
class TipouserFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'tipouser';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idTipoUser' => 1,
                'nome' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
