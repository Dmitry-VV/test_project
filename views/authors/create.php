<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AuthorsModel */

$this->title = 'Добавить нового автора';
$this->params['breadcrumbs'][] = ['label'=>'Управление', 'url'=>['site/manager']];
$this->params['breadcrumbs'][] = ['label' => 'Авторы изданий', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
