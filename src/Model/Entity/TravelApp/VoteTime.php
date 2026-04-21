<?php
declare(strict_types=1);

namespace App\Model\Entity\TravelApp;

use Cake\ORM\Entity;

/**
 * VoteTime Entity
 *
 * @property int $id
 * @property string $travel_uuid
 * @property \Cake\I18n\FrozenTime $start_time
 * @property \Cake\I18n\FrozenTime $end_time
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 */
class VoteTime extends Entity
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
        'start_time' => true,
        'end_time' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
    ];
}
