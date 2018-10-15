<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mail Entity
 *
 * @property int $ID
 * @property int $SEND_ACNT
 * @property int $RECEIVED_ACNT
 * @property string $SUBJECT
 * @property string $BODY
 * @property \Cake\I18n\FrozenDate $SEND_DATE
 * @property int $DEL_FLG
 * @property \Cake\I18n\FrozenDate $REC_DT
 */
class Mail extends Entity
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
        'SEND_ACNT' => true,
        'RECEIVED_ACNT' => true,
        'SUBJECT' => true,
        'BODY' => true,
        'SEND_DATE' => true,
        'DEL_FLG' => true,
        'REC_DT' => true
    ];
}
