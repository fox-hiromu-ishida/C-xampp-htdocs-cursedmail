<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccountFixture
 *
 */
class AccountFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'account';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'アカウントID', 'precision' => null, 'autoIncrement' => null],
        'FIRST_NAME' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '姓', 'precision' => null, 'fixed' => null],
        'LAST_NAME' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '名', 'precision' => null, 'fixed' => null],
        'FIRST_NAME_RO' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '姓（ローマ字）', 'precision' => null, 'fixed' => null],
        'LAST_NAME_RO' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '名（ローマ字）', 'precision' => null, 'fixed' => null],
        'EMAIL' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'メールアドレス', 'precision' => null, 'fixed' => null],
        'PASSWORD' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'パスワード', 'precision' => null, 'fixed' => null],
        'HP' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'アカウントHP', 'precision' => null, 'autoIncrement' => null],
        'AUTH_TYPE' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '権限', 'precision' => null, 'autoIncrement' => null],
        'DEL_FLG' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'アカウント削除フラグ', 'precision' => null, 'autoIncrement' => null],
        'REC_DT' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '作成日時', 'precision' => null],
        'UPD_DT' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '更新日時', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'EMAIL' => ['type' => 'unique', 'columns' => ['EMAIL'], 'length' => []],
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
                'FIRST_NAME' => 'Lorem ipsum dolor sit amet',
                'LAST_NAME' => 'Lorem ipsum dolor sit amet',
                'FIRST_NAME_RO' => 'Lorem ipsum dolor sit amet',
                'LAST_NAME_RO' => 'Lorem ipsum dolor sit amet',
                'EMAIL' => 'Lorem ipsum dolor sit amet',
                'PASSWORD' => 'Lorem ipsum dolor sit amet',
                'HP' => 1,
                'AUTH_TYPE' => 1,
                'DEL_FLG' => 1,
                'REC_DT' => '2018-10-15',
                'UPD_DT' => '2018-10-15'
            ],
        ];
        parent::init();
    }
}
