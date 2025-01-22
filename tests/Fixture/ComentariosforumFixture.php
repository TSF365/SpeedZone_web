<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComentariosforumFixture
 */
class ComentariosforumFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'comentariosforum';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idComentario' => 1,
                'idUser' => 1,
                'idTopico' => 1,
                'conteudo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'dataComentario' => '2025-01-15',
            ],
        ];
        parent::init();
    }
}
