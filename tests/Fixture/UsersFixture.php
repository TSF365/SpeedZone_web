<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'id' => 1,
                'username' => 'Lorem ip',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'nacionalidade' => 'Lorem ipsum dolor sit amet',
                'dataRegisto' => '2024-12-13 16:05:54',
                'estado' => 1,
                'tipoUser' => 1,
            ],
        ];
        parent::init();
    }
}
