<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VoteTimeFixture
 */
class VoteTimeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'vote_time';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'travel_uuid' => 'Lorem ipsum dolor sit amet',
                'start_time' => '2026-04-21 13:16:50',
                'end_time' => '2026-04-21 13:16:50',
                'created' => '2026-04-21 13:16:50',
                'modified' => '2026-04-21 13:16:50',
                'deleted' => '2026-04-21 13:16:50',
            ],
        ];
        parent::init();
    }
}
