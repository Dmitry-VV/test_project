<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BooksModel */

$this->title = 'Добавление нового издания';
$this->params['breadcrumbs'][] = ['label'=>'Управление каталогом', 'url'=>['site/manager']];
$this->params['breadcrumbs'][] = ['label' => 'Издания', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
