<?php

use yii\db\Migration;

/**
 * Class m220523_165645_create_table_gallery
 */
class m220523_165645_create_table_gallery extends Migration
{
    public function up()
    {
        $this->createTable('gallery', [
            'id' => $this->primaryKey(),
            'img' => $this->string()->notNull(),

        ]);
    }

    public function down()
    {
        $this->dropTable('gallery');
    }
}
