<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComentariosforumTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComentariosforumTable Test Case
 */
class ComentariosforumTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComentariosforumTable
     */
    protected $Comentariosforum;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Comentariosforum',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Comentariosforum') ? [] : ['className' => ComentariosforumTable::class];
        $this->Comentariosforum = $this->getTableLocator()->get('Comentariosforum', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Comentariosforum);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ComentariosforumTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
