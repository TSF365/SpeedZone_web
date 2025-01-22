<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AmizadesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AmizadesTable Test Case
 */
class AmizadesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AmizadesTable
     */
    protected $Amizades;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Amizades',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Amizades') ? [] : ['className' => AmizadesTable::class];
        $this->Amizades = $this->getTableLocator()->get('Amizades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Amizades);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AmizadesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
