<?php

use yii\db\Migration;

/**
 * Class m220524_035812_create_table_teacher
 */
class m220524_035812_create_table_teacher extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%teacher}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(127),
            'tel' => $this->string(127),
            'email' => $this->string(127),
            'site' => $this->string(127),
            'status' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%teacher_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'name' => $this->string(255)->notNull(),
            'work' => $this->text(),
            'location' => $this->text(),

        ], $tableOptions);

        $this->addForeignKey('fk_teacher_lang', '{{%teacher_lang}}', 'owner_id', '{{%teacher}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_teacher_lang', '{{%teacher_lang}}');
        $this->dropTable('{{%teacher_lang}}');
        $this->dropTable('{{%teacher}}');
    }

}
