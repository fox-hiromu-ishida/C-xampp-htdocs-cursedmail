<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DamageLog Model
 *
 * @method \App\Model\Entity\DamageLog get($primaryKey, $options = [])
 * @method \App\Model\Entity\DamageLog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DamageLog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DamageLog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DamageLog|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DamageLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DamageLog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DamageLog findOrCreate($search, callable $callback = null, $options = [])
 */
class DamageLogTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('damage_log');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('ID')
            ->allowEmpty('ID', 'create');

        $validator
            ->integer('AT_ACNT_ID')
            ->requirePresence('AT_ACNT_ID', 'create')
            ->notEmpty('AT_ACNT_ID');

        $validator
            ->integer('DF_ACNT_ID')
            ->requirePresence('DF_ACNT_ID', 'create')
            ->notEmpty('DF_ACNT_ID');

        $validator
            ->integer('RECEIVED_DMG')
            ->requirePresence('RECEIVED_DMG', 'create')
            ->notEmpty('RECEIVED_DMG');

        $validator
            ->integer('MAIL_ID')
            ->requirePresence('MAIL_ID', 'create')
            ->notEmpty('MAIL_ID');

        $validator
            ->dateTime('REC_DT')
            ->requirePresence('REC_DT', 'create')
            ->notEmpty('REC_DT');

        return $validator;
    }
}
