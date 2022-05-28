<?php

use yii\db\Migration;

/**
 * Class m220523_133314_create_table_abouticon
 */
class m220523_133314_create_table_abouticon extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%abouticon}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%abouticon_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_abouticon_lang', '{{%abouticon_lang}}', 'owner_id', '{{%abouticon}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_abouticon_lang', '{{%abouticon_lang}}');
        $this->dropTable('{{%abouticon_lang}}');
        $this->dropTable('{{%abouticon}}');
    }

}
