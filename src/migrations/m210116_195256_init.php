<?php

use yii\db\Migration;
use yii\db\Schema;

//YÜKLENCEK
/**
 * Class m210116_195256_init
 */
class m210116_195256_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('students', [
            'id' => Schema::TYPE_PK,
            // $this->primaryKey()
            'nameStudents' => Schema::TYPE_STRING,
            // $this->string(255) // String with 255 characters
            'classStudents' => Schema::TYPE_STRING,
            'created_at' => Schema::TYPE_DATETIME,
            // $this->integer()
            'updated_at' => Schema::TYPE_DATETIME
            ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('content');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210116_195256_init cannot be reverted.\n";

        return false;
    }
    */
}
