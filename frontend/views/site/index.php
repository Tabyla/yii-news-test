<?php
/* @var $this yii\web\View */

/* @var $news common\models\News[] */

use yii\helpers\Html;

?>

<div class="container">
    <div class="row news">
        <?php foreach ($news as $newsItem): ?>
            <div class="col-md-8 mx-auto">
                <div class="news-item text-center">
                    <h2><?= Html::encode($newsItem->title) ?></h2>
                    <p><?= Html::encode($newsItem->content) ?></p>
                    <?php if ($newsItem->image): ?>
                        <img src="img/<?= Html::encode($newsItem->image) ?>"
                             alt="<?= Html::encode($newsItem->title) ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
                <hr>
            </div>
        <?php endforeach; ?>
    </div>
</div>
