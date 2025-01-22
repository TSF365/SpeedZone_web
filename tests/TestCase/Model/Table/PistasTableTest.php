<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PistasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PistasTable Test Case
 */
class PistasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PistasTable
     */
    protected $Pistas;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Pistas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pistas') ? [] : ['className' => PistasTable::class];
        $this->Pistas = $this->getTableLocator()->get('Pistas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pistas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PistasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
