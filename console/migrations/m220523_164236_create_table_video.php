<?php

use yii\db\Migration;

/**
 * Class m220523_164236_create_table_video
 */
class m220523_164236_create_table_video extends Migration
{
    public function up()
    {
        $this->createTable('video', [
            'id' => $this->primaryKey(),
            'img' => $this->string()->notNull(),
            'url' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('video');
    }

}
