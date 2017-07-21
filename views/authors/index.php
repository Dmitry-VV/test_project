<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthorsSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Авторы изданий';
$this->params['breadcrumbs'][] = ['label'=>'Управление', 'url'=>['site/manager']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p class="text-right">
        <?= Html::a('Добавить нового автора', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'book_count',
            ['class' => 'yii\grid\ActionColumn'],
        ],
        'layout' => "{summary}\n{items}\n{pager}"
    ]); ?>
</div>
