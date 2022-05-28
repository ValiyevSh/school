<?php

use yii\db\Migration;

/**
 * Class m220527_163603_create_table_footericon
 */
class m220527_163603_create_table_footericon extends Migration
{
    public function up()
    {
        $this->createTable('footericon', [
            'id' => $this->primaryKey(),
            'icon' => $this->string()->notNull(),
            'url' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('footericon');
    }
}
