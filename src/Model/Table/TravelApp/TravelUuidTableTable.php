<?php
declare(strict_types=1);

namespace App\Model\Table\TravelApp;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TravelUuidTable Model
 *
 * @method \App\Model\Entity\TravelUuidTable newEmptyEntity()
 * @method \App\Model\Entity\TravelUuidTable newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TravelUuidTable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TravelUuidTable get($primaryKey, $options = [])
 * @method \App\Model\Entity\TravelUuidTable findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TravelUuidTable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TravelUuidTable[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TravelUuidTable|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TravelUuidTable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TravelUuidTable[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TravelUuidTable[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TravelUuidTable[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TravelUuidTable[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TravelUuidTableTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('travel_uuid_table');
        $this->setDisplayField('name');
        $this->setPrimaryKey('uuid');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->dateTime('deleted')
            ->allowEmptyDateTime('deleted');

        return $validator;
    }
}
