<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SendReceivedFixture
 *
 */
class SendReceivedFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'send_received';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '送信履歴ID', 'autoIncrement' => true, 'precision' => null],
        'ACCOUNT_ID' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'アカウントID', 'precision' => null, 'autoIncrement' => null],
        'MAIL_ID' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'メールID', 'precision' => null, 'autoIncrement' => null],
        'SEND_DATE' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '送信日時', 'precision' => null],
        'RECEIVED_DATE' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '受信日時', 'precision' => null],
        'SEND_RECEIVED_FLG' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '送受信フラグ', 'precision' => null, 'autoIncrement' => null],
        'DEL_FLG' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
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
                'ACCOUNT_ID' => 1,
                'MAIL_ID' => 1,
                'SEND_DATE' => '2018-10-15 08:46:14',
                'RECEIVED_DATE' => '2018-10-15 08:46:14',
                'SEND_RECEIVED_FLG' => 1,
                'DEL_FLG' => 1,
                'REC_DT' => '2018-10-15 08:46:14'
            ],
        ];
        parent::init();
    }
}
