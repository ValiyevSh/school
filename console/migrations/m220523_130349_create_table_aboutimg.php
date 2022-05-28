<?php

use yii\db\Migration;

/**
 * Class m220523_130349_create_table_aboutimg
 */
class m220523_130349_create_table_aboutimg extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%aboutimg}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%aboutimg_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_aboutimg_lang', '{{%aboutimg_lang}}', 'owner_id', '{{%aboutimg}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_aboutimg_lang', '{{%aboutimg_lang}}');
        $this->dropTable('{{%aboutimg_lang}}');
        $this->dropTable('{{%aboutimg}}');
    }

}
