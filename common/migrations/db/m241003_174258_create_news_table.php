<?php

declare(strict_types=1);

use yii\db\Migration;

class m241003_174258_create_news_table extends Migration
{
    private const string TABLE_NAME = '{{%news}}';

    public function safeUp(): void
    {
        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull()->comment('Заголовок статьи'),
            'content' => $this->text()->notNull()->comment('Текст статьи'),
            'image' => $this->string(255)->comment('Изображение'),
            'created_at' => $this->integer()->notNull()->comment('Дата создания'),
            'updated_at' => $this->integer()->notNull()->comment('Дата обновления'),
        ]);
    }

    public function safeDown(): void
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
