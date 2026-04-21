<?php
declare(strict_types=1);

namespace App\Model\Entity\TravelApp;

use Cake\ORM\Entity;

/**
 * Vote Entity
 *
 * @property int $id
 * @property string $travel_uuid
 * @property string $place
 * @property int $count
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 */
class Vote extends Entity
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
        'place' => true,
        'count' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
    ];
}
