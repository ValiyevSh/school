<?php

use yii\db\Migration;

/**
 * Class m220524_051502_create_table_newscat
 */
class m220524_051502_create_table_newscat extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%newscat}}', [
            'id' => $this->primaryKey(),
        ], $tableOptions);

        $this->createTable('{{%newscat_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'name' => $this->string(255)->notNull(),

        ], $tableOptions);

        $this->addForeignKey('fk_newscat_lang', '{{%newscat_lang}}', 'owner_id', '{{%newscat}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_newscat_lang', '{{%newscat_lang}}');
        $this->dropTable('{{%newscat_lang}}');
        $this->dropTable('{{%newscat}}');
    }

}
