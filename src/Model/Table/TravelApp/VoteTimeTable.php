<?php
declare(strict_types=1);

namespace App\Model\Table\TravelApp;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VoteTime Model
 *
 * @method \App\Model\Entity\VoteTime newEmptyEntity()
 * @method \App\Model\Entity\VoteTime newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\VoteTime[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VoteTime get($primaryKey, $options = [])
 * @method \App\Model\Entity\VoteTime findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\VoteTime patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VoteTime[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\VoteTime|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VoteTime saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VoteTime[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\VoteTime[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\VoteTime[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\VoteTime[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VoteTimeTable extends Table
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

        $this->setTable('vote_time');
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
            ->dateTime('start_time')
            ->requirePresence('start_time', 'create')
            ->notEmptyDateTime('start_time');

        $validator
            ->dateTime('end_time')
            ->requirePresence('end_time', 'create')
            ->notEmptyDateTime('end_time');

        $validator
            ->dateTime('deleted')
            ->allowEmptyDateTime('deleted');

        return $validator;
    }
}
