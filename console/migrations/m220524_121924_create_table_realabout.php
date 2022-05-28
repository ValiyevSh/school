<?php

use yii\db\Migration;

/**
 * Class m220524_121924_create_table_realabout
 */
class m220524_121924_create_table_realabout extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%realabout}}', [
            'id' => $this->primaryKey(),
        ], $tableOptions);

        $this->createTable('{{%realabout_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_realabout_lang', '{{%realabout_lang}}', 'owner_id', '{{%realabout}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_realabout_lang', '{{%realabout_lang}}');
        $this->dropTable('{{%realabout_lang}}');
        $this->dropTable('{{%realabout}}');
    }
}
