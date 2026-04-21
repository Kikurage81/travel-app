<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VoteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VoteTable Test Case
 */
class VoteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VoteTable
     */
    protected $Vote;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Vote',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Vote') ? [] : ['className' => VoteTable::class];
        $this->Vote = $this->getTableLocator()->get('Vote', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Vote);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VoteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
