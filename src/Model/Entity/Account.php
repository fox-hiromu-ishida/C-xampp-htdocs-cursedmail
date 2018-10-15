<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Account Entity
 *
 * @property int $ID
 * @property string $FIRST_NAME
 * @property string $LAST_NAME
 * @property string $FIRST_NAME_RO
 * @property string $LAST_NAME_RO
 * @property string $EMAIL
 * @property string $PASSWORD
 * @property int $HP
 * @property int $AUTH_TYPE
 * @property int $DEL_FLG
 * @property \Cake\I18n\FrozenDate $REC_DT
 * @property \Cake\I18n\FrozenDate $UPD_DT
 */
class Account extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'FIRST_NAME' => true,
        'LAST_NAME' => true,
        'FIRST_NAME_RO' => true,
        'LAST_NAME_RO' => true,
        'EMAIL' => true,
        'PASSWORD' => true,
        'HP' => true,
        'AUTH_TYPE' => true,
        'DEL_FLG' => true,
        'REC_DT' => true,
        'UPD_DT' => true
    ];
}
