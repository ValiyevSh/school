<?php

use yii\db\Migration;

/**
 * Class m220523_105049_create_table_logo
 */
class m220523_105049_create_table_logo extends Migration
{
    public function up()
    {
        $this->createTable('logo', [
            'id' => $this->primaryKey(),
            'img' => $this->string()->notNull(),

        ]);
    }

    public function down()
    {
        $this->dropTable('logo');
    }
}
