<?php

declare(strict_types=1);

namespace backend\controllers;

use common\models\News;
use Throwable;
use Yii;
use yii\db\StaleObjectException;
use yii\web\Controller;
use yii\web\Response;

class NewsController extends Controller
{
    public function actionIndex(): string
    {
        $news = News::find()->all();

        return $this->render('index', [
            'news' => $news
        ]);
    }

    /**
     * @throws Throwable
     * @throws StaleObjectException
     */
    public function actionDelete(int $id): Response
    {
        $model = News::findOne($id);
        if ($model) {
            $model->delete();
        }

        return $this->redirect(['index']);
    }

    public function actionBulk(): Response
    {
        $ids = Yii::$app->request->post('ids');
        if (!empty($ids)) {
            News::deleteAll(['id' => $ids]);
        }

        return $this->redirect(['index']);
    }
}
