<?php
declare(strict_types=1);

namespace App\Model\Entity\TravelApp;

use Cake\ORM\Entity;

/**
 * Plan Entity
 *
 * @property int $id
 * @property string $travel_uuid
 * @property string $title
 * @property \Cake\I18n\FrozenDate $travel_date
 * @property \Cake\I18n\FrozenTime $time_start
 * @property \Cake\I18n\FrozenTime $time_end
 * @property int $category_id
 * @property string|null $place
 * @property string|null $memo
 * @property int $display_order
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 */
class Plan extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'travel_uuid' => true,
        'title' => true,
        'travel_date' => true,
        'time_start' => true,
        'time_end' => true,
        'category_id' => true,
        'place' => true,
        'memo' => true,
        'display_order' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
    ];
}
