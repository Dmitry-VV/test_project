<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AuthorsModel */

$this->title = 'Элемент #'.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Управление', 'url'=>['site/manager']];
$this->params['breadcrumbs'][] = ['label' => 'Авторы изданий', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
        ],
    ]) ?>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить данный элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
