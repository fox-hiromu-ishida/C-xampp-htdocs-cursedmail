<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DamageLog Entity
 *
 * @property int $ID
 * @property int $AT_ACNT_ID
 * @property int $DF_ACNT_ID
 * @property int $RECEIVED_DMG
 * @property int $MAIL_ID
 * @property \Cake\I18n\FrozenTime $REC_DT
 */
class DamageLog extends Entity
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
        'AT_ACNT_ID' => true,
        'DF_ACNT_ID' => true,
        'RECEIVED_DMG' => true,
        'MAIL_ID' => true,
        'REC_DT' => true
    ];
}
