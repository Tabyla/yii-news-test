<?php

declare(strict_types=1);

namespace common\models;

use yii\db\ActiveRecord;

class News extends ActiveRecord
{
    public static function tableName(): string
    {
        return 'news';
    }

    public function rules(): array
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'content' => 'Текст',
            'image' => 'Изображение',
            'created_at' => 'Создано в',
            'updated_at' => 'Обновлено в',
        ];
    }
}
