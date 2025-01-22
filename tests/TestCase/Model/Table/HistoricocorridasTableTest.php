<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistoricocorridasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistoricocorridasTable Test Case
 */
class HistoricocorridasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HistoricocorridasTable
     */
    protected $Historicocorridas;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Historicocorridas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Historicocorridas') ? [] : ['className' => HistoricocorridasTable::class];
        $this->Historicocorridas = $this->getTableLocator()->get('Historicocorridas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Historicocorridas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HistoricocorridasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
