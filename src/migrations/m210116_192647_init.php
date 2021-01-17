<?php

use yii\db\Migration;
use yii\db\Schema;

//YÜKLENCEK
/**
 * Class m210116_192647_init
 */
class m210116_192647_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('teachers', [
            'id' => Schema::TYPE_PK,
            // $this->primaryKey()
            'name' => Schema::TYPE_STRING,
            // $this->string(255) // String with 255 characters
            'class' => Schema::TYPE_STRING,
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
        echo "m210116_192647_init cannot be reverted.\n";

        return false;
    }
    */
}
