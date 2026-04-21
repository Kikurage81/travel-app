<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TravelUuidTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TravelUuidTable Test Case
 */
class TravelUuidTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TravelUuidTable
     */
    protected $TravelUuidTable;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TravelUuid') ? [] : ['className' => TravelUuidTable::class];
        $this->TravelUuidTable = $this->getTableLocator()->get('TravelUuid', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TravelUuidTable);

        parent::tearDown();
    }
}
