<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Добро пожаловть в библиотеку';

foreach($authors AS $author)
{
	echo Html::tag('h2', Html::encode($author->name).' '.Html::tag('small', '(изданий '.$author->book_count.')'));
	if ($author->book_count)
		echo Html::tag('ul', implode('', array_map(function($book){ return Html::tag('li', Html::encode($book->title)); }, $author->books)) );
	echo '<hr />';
}

?>
