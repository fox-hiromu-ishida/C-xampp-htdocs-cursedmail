<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mail Model
 *
 * @method \App\Model\Entity\Mail get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mail|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mail findOrCreate($search, callable $callback = null, $options = [])
 */
class MailTable extends Table
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

        $this->setTable('mail');
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
            ->integer('SEND_ACNT')
            ->requirePresence('SEND_ACNT', 'create')
            ->notEmpty('SEND_ACNT');

        $validator
            ->integer('RECEIVED_ACNT')
            ->requirePresence('RECEIVED_ACNT', 'create')
            ->notEmpty('RECEIVED_ACNT');

        $validator
            ->scalar('SUBJECT')
            ->allowEmpty('SUBJECT');

        $validator
            ->scalar('BODY')
            ->allowEmpty('BODY');

        $validator
            ->date('SEND_DATE')
            ->requirePresence('SEND_DATE', 'create')
            ->notEmpty('SEND_DATE');

        $validator
            ->integer('DEL_FLG')
            ->requirePresence('DEL_FLG', 'create')
            ->notEmpty('DEL_FLG');

        $validator
            ->date('REC_DT')
            ->requirePresence('REC_DT', 'create')
            ->notEmpty('REC_DT');

        return $validator;
    }
}
