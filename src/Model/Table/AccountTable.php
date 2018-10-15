<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Account Model
 *
 * @method \App\Model\Entity\Account get($primaryKey, $options = [])
 * @method \App\Model\Entity\Account newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Account[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Account|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Account|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Account patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Account[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Account findOrCreate($search, callable $callback = null, $options = [])
 */
class AccountTable extends Table
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

        $this->setTable('account');
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
            ->scalar('FIRST_NAME')
            ->maxLength('FIRST_NAME', 36)
            ->requirePresence('FIRST_NAME', 'create')
            ->notEmpty('FIRST_NAME');

        $validator
            ->scalar('LAST_NAME')
            ->maxLength('LAST_NAME', 36)
            ->requirePresence('LAST_NAME', 'create')
            ->notEmpty('LAST_NAME');

        $validator
            ->scalar('FIRST_NAME_RO')
            ->maxLength('FIRST_NAME_RO', 36)
            ->requirePresence('FIRST_NAME_RO', 'create')
            ->notEmpty('FIRST_NAME_RO');

        $validator
            ->scalar('LAST_NAME_RO')
            ->maxLength('LAST_NAME_RO', 36)
            ->requirePresence('LAST_NAME_RO', 'create')
            ->notEmpty('LAST_NAME_RO');

        $validator
            ->scalar('EMAIL')
            ->maxLength('EMAIL', 255)
            ->requirePresence('EMAIL', 'create')
            ->notEmpty('EMAIL')
            ->add('EMAIL', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('PASSWORD')
            ->maxLength('PASSWORD', 255)
            ->requirePresence('PASSWORD', 'create')
            ->notEmpty('PASSWORD');

        $validator
            ->integer('HP')
            ->requirePresence('HP', 'create')
            ->notEmpty('HP');

        $validator
            ->integer('AUTH_TYPE')
            ->requirePresence('AUTH_TYPE', 'create')
            ->notEmpty('AUTH_TYPE');

        $validator
            ->integer('DEL_FLG')
            ->requirePresence('DEL_FLG', 'create')
            ->notEmpty('DEL_FLG');

        $validator
            ->date('REC_DT')
            ->requirePresence('REC_DT', 'create')
            ->notEmpty('REC_DT');

        $validator
            ->date('UPD_DT')
            ->requirePresence('UPD_DT', 'create')
            ->notEmpty('UPD_DT');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['EMAIL']));

        return $rules;
    }
}
