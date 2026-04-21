<?php
declare(strict_types=1);

namespace App\Model\Table\TravelApp;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vote Model
 *
 * @method \App\Model\Entity\Vote newEmptyEntity()
 * @method \App\Model\Entity\Vote newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vote[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vote get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vote findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vote[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vote|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vote saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vote[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vote[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vote[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vote[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VoteTable extends Table
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

        $this->setTable('vote');
        $this->setDisplayField('travel_uuid');
        $this->setPrimaryKey('id');

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
            ->scalar('travel_uuid')
            ->maxLength('travel_uuid', 31)
            ->requirePresence('travel_uuid', 'create')
            ->notEmptyString('travel_uuid');

        $validator
            ->scalar('place')
            ->maxLength('place', 255)
            ->requirePresence('place', 'create')
            ->notEmptyString('place');

        $validator
            ->integer('count')
            ->requirePresence('count', 'create')
            ->notEmptyString('count');

        $validator
            ->dateTime('deleted')
            ->allowEmptyDateTime('deleted');

        return $validator;
    }
}
