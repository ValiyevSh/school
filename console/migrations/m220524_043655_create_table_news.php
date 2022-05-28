<?php

use yii\db\Migration;

/**
 * Class m220524_043655_create_table_news
 */
class m220524_043655_create_table_news extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'date' => $this->string(127),
            'img' => $this->string(127),
            'status' => $this->string(127),
            'categoryid' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%news_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_news_lang', '{{%news_lang}}', 'owner_id', '{{%news}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_news_lang', '{{%news_lang}}');
        $this->dropTable('{{%news_lang}}');
        $this->dropTable('{{%news}}');
    }

}
