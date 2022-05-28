<?php

use yii\db\Migration;

/**
 * Class m220523_170838_create_table_testimonial
 */
class m220523_170838_create_table_testimonial extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%testimonial}}', [
            'id' => $this->primaryKey(),
            'star' => $this->string(127),
            'img' => $this->string(127),
            'tel' => $this->string(127),
            'email' => $this->string(127),
            'site' => $this->string(127),


        ], $tableOptions);

        $this->createTable('{{%testimonial_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'content' => $this->text(),
            'location' => $this->text(),

        ], $tableOptions);

        $this->addForeignKey('fk_testimonial_lang', '{{%testimonial_lang}}', 'owner_id', '{{%testimonial}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_testimonial_lang', '{{%testimonial_lang}}');
        $this->dropTable('{{%testimonial_lang}}');
        $this->dropTable('{{%testimonial}}');
    }
}
