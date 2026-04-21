<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlanTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlanTable Test Case
 */
class PlanTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PlanTable
     */
    protected $Plan;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Plan',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Plan') ? [] : ['className' => PlanTable::class];
        $this->Plan = $this->getTableLocator()->get('Plan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Plan);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PlanTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
