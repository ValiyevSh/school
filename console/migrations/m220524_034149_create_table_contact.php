<?php

use yii\db\Migration;

/**
 * Class m220524_034149_create_table_contact
 */
class m220524_034149_create_table_contact extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%contact}}', [
            'id' => $this->primaryKey(),
            'number' => $this->string(127),
        
        ], $tableOptions);

        $this->createTable('{{%contact_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_contact_lang', '{{%contact_lang}}', 'owner_id', '{{%contact}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_contact_lang', '{{%contact_lang}}');
        $this->dropTable('{{%contact_lang}}');
        $this->dropTable('{{%contact}}');
    }

}
