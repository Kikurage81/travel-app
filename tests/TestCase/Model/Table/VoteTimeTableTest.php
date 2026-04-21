<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VoteTimeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VoteTimeTable Test Case
 */
class VoteTimeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VoteTimeTable
     */
    protected $VoteTime;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.VoteTime',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('VoteTime') ? [] : ['className' => VoteTimeTable::class];
        $this->VoteTime = $this->getTableLocator()->get('VoteTime', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->VoteTime);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VoteTimeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
