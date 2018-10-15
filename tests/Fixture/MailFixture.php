<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MailFixture
 *
 */
class MailFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'mail';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'メールID', 'precision' => null, 'autoIncrement' => null],
        'SEND_ACNT' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '送信アカウントID', 'precision' => null, 'autoIncrement' => null],
        'RECEIVED_ACNT' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '受信アカウントID', 'precision' => null, 'autoIncrement' => null],
        'SUBJECT' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'タイトル', 'precision' => null],
        'BODY' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '本文', 'precision' => null],
        'SEND_DATE' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '送信日時', 'precision' => null],
        'DEL_FLG' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'メール削除フラグ', 'precision' => null, 'autoIncrement' => null],
        'REC_DT' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '作成日時', 'precision' => null],
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
                'SEND_ACNT' => 1,
                'RECEIVED_ACNT' => 1,
                'SUBJECT' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'BODY' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'SEND_DATE' => '2018-10-15',
                'DEL_FLG' => 1,
                'REC_DT' => '2018-10-15'
            ],
        ];
        parent::init();
    }
}
