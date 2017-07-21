<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AuthorsModel */

$this->title = 'Обновление элемента #'.$model->id;
$this->params['breadcrumbs'][] = ['label'=>'Управление', 'url'=>['site/manager']];
$this->params['breadcrumbs'][] = ['label' => 'Авторы изданий', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Элемент #'.$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновление';

?>
<div class="authors-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
