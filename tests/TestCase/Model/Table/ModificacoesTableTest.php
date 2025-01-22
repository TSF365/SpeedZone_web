<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModificacoesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModificacoesTable Test Case
 */
class ModificacoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ModificacoesTable
     */
    protected $Modificacoes;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Modificacoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Modificacoes') ? [] : ['className' => ModificacoesTable::class];
        $this->Modificacoes = $this->getTableLocator()->get('Modificacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Modificacoes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ModificacoesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
