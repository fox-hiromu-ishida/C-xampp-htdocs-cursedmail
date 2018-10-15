<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DamageLogFixture
 *
 */
class DamageLogFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'damage_log';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'ダメージログID', 'autoIncrement' => true, 'precision' => null],
        'AT_ACNT_ID' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '攻撃アカウントID', 'precision' => null, 'autoIncrement' => null],
        'DF_ACNT_ID' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '守備アカウントID', 'precision' => null, 'autoIncrement' => null],
        'RECEIVED_DMG' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'ダメージ量', 'precision' => null, 'autoIncrement' => null],
        'MAIL_ID' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'メールID', 'precision' => null, 'autoIncrement' => null],
        'REC_DT' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '作成日時', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'ID' => 1,
                'AT_ACNT_ID' => 1,
                'DF_ACNT_ID' => 1,
                'RECEIVED_DMG' => 1,
                'MAIL_ID' => 1,
                'REC_DT' => '2018-10-15 08:38:01'
            ],
        ];
        parent::init();
    }
}
