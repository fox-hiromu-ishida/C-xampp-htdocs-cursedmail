<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SendReceived Model
 *
 * @method \App\Model\Entity\SendReceived get($primaryKey, $options = [])
 * @method \App\Model\Entity\SendReceived newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SendReceived[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SendReceived|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SendReceived|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SendReceived patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SendReceived[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SendReceived findOrCreate($search, callable $callback = null, $options = [])
 */
class SendReceivedTable extends Table
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

        $this->setTable('send_received');
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
            ->integer('ACNT_ID')
            ->requirePresence('ACNT_ID', 'create')
            ->notEmpty('ACNT_ID');

        $validator
            ->integer('MAIL_ID')
            ->requirePresence('MAIL_ID', 'create')
            ->notEmpty('MAIL_ID');

        $validator
            ->dateTime('SEND_DATE')
            ->allowEmpty('SEND_DATE');

        $validator
            ->dateTime('RECEIVED_DATE')
            ->allowEmpty('RECEIVED_DATE');

        $validator
            ->integer('SEND_RECEIVED_FLG')
            ->requirePresence('SEND_RECEIVED_FLG', 'create')
            ->notEmpty('SEND_RECEIVED_FLG');

        $validator
            ->integer('DEL_FLG')
            ->requirePresence('DEL_FLG', 'create')
            ->notEmpty('DEL_FLG');

        $validator
            ->dateTime('REC_DT')
            ->requirePresence('REC_DT', 'create')
            ->notEmpty('REC_DT');

        return $validator;
    }
}
