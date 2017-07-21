<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Управление';
$this->params['breadcrumbs'][] = $this->title;

echo Html::tag('h1', Html::encode($this->title));
?>
<div class="row">
	<div class="col-xs-12 col-sm-6">
		<?= Html::a('Управление авторами', ['authors/index'], ['class' => 'btn btn-default btn-block']) ?>
	</div>
	<div class="col-xs-12 col-sm-6">
		<?= Html::a('Управление изданиями', ['books/index'], ['class' => 'btn btn-default btn-block']) ?>
	</div>
</div>
