<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PlanFixture
 */
class PlanFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'plan';
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
                'title' => 'Lorem ipsum dolor sit amet',
                'travel_date' => '2026-04-21',
                'time_start' => 1776777407,
                'time_end' => 1776777407,
                'category_id' => 1,
                'place' => 'Lorem ipsum dolor sit amet',
                'memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'display_order' => 1,
                'created' => '2026-04-21 13:16:47',
                'modified' => '2026-04-21 13:16:47',
                'deleted' => '2026-04-21 13:16:47',
            ],
        ];
        parent::init();
    }
}
