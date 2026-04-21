<?php
declare(strict_types=1);

namespace App\Model\Table\TravelApp;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Plan Model
 *
 * @method \App\Model\Entity\Plan newEmptyEntity()
 * @method \App\Model\Entity\Plan newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Plan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Plan get($primaryKey, $options = [])
 * @method \App\Model\Entity\Plan findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Plan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Plan[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Plan|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plan saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plan[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Plan[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Plan[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Plan[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PlanTable extends Table
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

        $this->setTable('plan');
        $this->setDisplayField('title');
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->date('travel_date')
            ->requirePresence('travel_date', 'create')
            ->notEmptyDate('travel_date');

        $validator
            ->dateTime('time_start')
            ->requirePresence('time_start', 'create')
            ->notEmptyDateTime('time_start');

        $validator
            ->dateTime('time_end')
            ->requirePresence('time_end', 'create')
            ->notEmptyDateTime('time_end');

        $validator
            ->integer('category_id')
            ->requirePresence('category_id', 'create')
            ->notEmptyString('category_id');

        $validator
            ->scalar('place')
            ->maxLength('place', 255)
            ->allowEmptyString('place');

        $validator
            ->scalar('memo')
            ->allowEmptyString('memo');

        $validator
            ->integer('display_order')
            ->requirePresence('display_order', 'create')
            ->notEmptyString('display_order');

        $validator
            ->dateTime('deleted')
            ->allowEmptyDateTime('deleted');

        return $validator;
    }
}
