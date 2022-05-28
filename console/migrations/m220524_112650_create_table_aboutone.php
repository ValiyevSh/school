<?php

use yii\db\Migration;

/**
 * Class m220524_112650_create_table_aboutone
 */
class m220524_112650_create_table_aboutone extends Migration
{
    public function up()
    {
        $this->createTable('aboutone', [
            'id' => $this->primaryKey(),
            'img' => $this->string()->notNull(),

        ]);
    }

    public function down()
    {
        $this->dropTable('aboutone');
    }

}
