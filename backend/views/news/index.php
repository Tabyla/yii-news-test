<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $news common\models\News[] */
?>

<?php $form = ActiveForm::begin(['action' => Url::to(['news/bulk'])]); ?>

<table class="table">
    <thead>
    <tr>
        <th><?= Html::checkbox('select_all', false, ['id' => 'select-all']) ?></th>
        <th>Название</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($news as $article): ?>
        <tr>
            <td><?= Html::checkbox('ids[]', false, ['value' => $article->id]) ?></td>
            <td><?= Html::encode($article->title) ?></td>
            <td>
                <?= Html::a('Удалить', ['news/delete', 'id' => $article->id], [
                    'class' => 'btn btn-danger',
                    'data-method' => 'post',
                    'data-confirm' => 'Удалить новость?',
                ]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?= Html::submitButton('Удалить', ['class' => 'btn btn-danger']) ?>

<?php ActiveForm::end(); ?>

<script>
    document.getElementById('select-all').addEventListener('click', function () {
        let checkboxes = document.querySelectorAll('input[name="ids[]"]');
        checkboxes.forEach(checkbox => checkbox.checked = this.checked);
    });
</script>
