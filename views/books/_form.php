<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\AuthorsModel;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\BooksModel */
/* @var $form yii\widgets\ActiveForm */

$authors = AuthorsModel::find()->orderBy('name')->all();
$items = ArrayHelper::map($authors,'id','name');
$params = ['prompt' => 'Укажите автора издания'];
?>

<div class="books-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author_id')->dropDownList($items, $params);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Отменить', $model->isNewRecord ?['index']:['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
