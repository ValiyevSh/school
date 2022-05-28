<?php

use yii\db\Migration;

/**
 * Class m220527_161602_create_table_footer
 */
class m220527_161602_create_table_footer extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%footer}}', [
            'id' => $this->primaryKey(),
            'tel' => $this->string(127),
            'email' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%footer_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'location' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_footer_lang', '{{%footer_lang}}', 'owner_id', '{{%footer}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_footer_lang', '{{%footer_lang}}');
        $this->dropTable('{{%footer_lang}}');
        $this->dropTable('{{%footer}}');
    }

}
