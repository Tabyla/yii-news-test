<?php

declare(strict_types=1);

namespace frontend\controllers;

use common\models\News;
use yii\web\Controller;
use yii\web\ErrorAction;

class SiteController extends Controller
{
    public function actions(): array
    {
        return [
            'error' => [
                'class' => ErrorAction::class
            ],
        ];
    }

    public function actionIndex(): string
    {
        $news = News::find()->orderBy(['created_at' => SORT_DESC])->all();

        return $this->render('index', [
            'news' => $news
        ]);
    }
}
