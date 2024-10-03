<?php

declare(strict_types=1);

use yii\db\Migration;

class m241003_181943_seed_news_table extends Migration
{
    private const string TABLE_NAME = '{{%news}}';

    public function safeUp(): void
    {
        $this->batchInsert(self::TABLE_NAME,
            ['title', 'content', 'image', 'created_at', 'updated_at'],
            [
                ['Новость 1', 'Текст новости 1', 'image1.jpg', time(), time()],
                ['Новость 2', 'Текст новости 2', 'image2.jpg', time(), time()],
                ['Новость 3', 'Текст новости 3', 'image3.jpg', time(), time()],
                ['Новость 4', 'Текст новости 4', 'image4.jpg', time(), time()],
                ['Новость 5', 'Текст новости 5', 'image5.jpg', time(), time()],
                ['Новость 6', 'Текст новости 6', 'image6.jpg', time(), time()],
                ['Новость 7', 'Текст новости 7', 'image7.jpg', time(), time()],
            ]);
    }

    public function safeDown(): void
    {
        $this->delete(self::TABLE_NAME, ['title' => ['Новость 1', 'Новость 2', 'Новость 3']]);
    }
}
