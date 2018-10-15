<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SendReceived Entity
 *
 * @property int $ID
 * @property int $ACNT_ID
 * @property int $MAIL_ID
 * @property \Cake\I18n\FrozenDate $SEND_DATE
 * @property \Cake\I18n\FrozenDate $RECEIVED_DATE
 * @property int $SEND_RECEIVED_FLG
 * @property \Cake\I18n\FrozenDate $REC_DT
 */
class SendReceived extends Entity
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
        'ACNT_ID' => true,
        'MAIL_ID' => true,
        'SEND_DATE' => true,
        'RECEIVED_DATE' => true,
        'SEND_RECEIVED_FLG' => true,
        'REC_DT' => true
    ];
}
