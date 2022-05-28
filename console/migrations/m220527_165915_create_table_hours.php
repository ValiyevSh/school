<?php

use yii\db\Migration;

/**
 * Class m220527_165915_create_table_hours
 */
class m220527_165915_create_table_hours extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%hours}}', [
            'id' => $this->primaryKey(),
            'hours' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%hours_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),

        ], $tableOptions);

        $this->addForeignKey('fk_hours_lang', '{{%hours_lang}}', 'owner_id', '{{%hours}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_hours_lang', '{{%hours_lang}}');
        $this->dropTable('{{%hours_lang}}');
        $this->dropTable('{{%hours}}');
    }
}
