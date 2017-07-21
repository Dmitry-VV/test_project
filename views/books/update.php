<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BooksModel */

//$this->title = 'Обновление информации об издании: '.$model->title;
$this->title = 'Обновление элемента #'.$model->id;

$this->params['breadcrumbs'][] = ['label'=>'Управление', 'url'=>['site/manager']];
$this->params['breadcrumbs'][] = ['label' => 'Издания', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Элемент #'.$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновление';
?>
<div class="books-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
