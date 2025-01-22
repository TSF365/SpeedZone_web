<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipouserTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipouserTable Test Case
 */
class TipouserTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipouserTable
     */
    protected $Tipouser;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Tipouser',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipouser') ? [] : ['className' => TipouserTable::class];
        $this->Tipouser = $this->getTableLocator()->get('Tipouser', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipouser);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipouserTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
