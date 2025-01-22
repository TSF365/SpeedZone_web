<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstatisticasjogadorTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstatisticasjogadorTable Test Case
 */
class EstatisticasjogadorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EstatisticasjogadorTable
     */
    protected $Estatisticasjogador;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Estatisticasjogador',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Estatisticasjogador') ? [] : ['className' => EstatisticasjogadorTable::class];
        $this->Estatisticasjogador = $this->getTableLocator()->get('Estatisticasjogador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Estatisticasjogador);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EstatisticasjogadorTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
