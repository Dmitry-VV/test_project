<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BooksSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Издания';
$this->params['breadcrumbs'][] = ['label'=>'Управление', 'url'=>['site/manager']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p class="text-right">
        <?= Html::a('Добавить новое издание', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['attribute'=>'title',  'value'=>'title'],
            ['attribute'=>'author', 'value'=>'authors.name'],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
