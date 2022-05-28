<?php

use yii\db\Migration;

/**
 * Class m220525_040535_create_table_classes
 */
class m220525_040535_create_table_classes extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%classes}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(127),
            'productid' => $this->string(127),
            'time' => $this->string(127),


        ], $tableOptions);

        $this->createTable('{{%classes_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'start_date' => $this->string(255)->notNull(),
            'years_old' => $this->string(255)->notNull(),
            'classes_size' => $this->string(255)->notNull(),
            'carry_time' => $this->string(255)->notNull(),
            'coures_duration' => $this->string(255)->notNull(),
            'class_time' => $this->string(255)->notNull(),
            'rating' => $this->string(255)->notNull(),
            'tution_free' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_classes_lang', '{{%classes_lang}}', 'owner_id', '{{%classes}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_classes_lang', '{{%classes_lang}}');
        $this->dropTable('{{%classes_lang}}');
        $this->dropTable('{{%classes}}');
    }
}
