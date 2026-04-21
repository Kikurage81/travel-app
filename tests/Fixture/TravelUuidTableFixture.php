<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TravelUuidTableFixture
 */
class TravelUuidTableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'travel_uuid_table';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'uuid' => '9d02c212-c2bd-4206-922c-cd7333106a67',
                'name' => 'Lorem ipsum dolor sit amet',
                'created' => '2026-04-21 13:16:50',
                'modified' => '2026-04-21 13:16:50',
                'deleted' => '2026-04-21 13:16:50',
            ],
        ];
        parent::init();
    }
}
