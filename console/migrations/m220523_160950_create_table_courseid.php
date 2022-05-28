<?php

use yii\db\Migration;

/**
 * Class m220523_160950_create_table_courseid
 */
class m220523_160950_create_table_courseid extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%courseid}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(127),
            'price' => $this->integer(),
            'status' => $this->integer(),
            'courseid' => $this->integer(),
            'studentnumber' => $this->integer(),
            'date' => $this->string(255)->notNull(),
            'status' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->createTable('{{%courseid_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_courseid_lang', '{{%courseid_lang}}', 'owner_id', '{{%courseid}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_courseid_lang', '{{%courseid_lang}}');
        $this->dropTable('{{%courseid_lang}}');
        $this->dropTable('{{%courseid}}');
    }

}
