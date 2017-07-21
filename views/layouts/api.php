<?php

/* @var $this \yii\web\View */
/* @var $content string */
use Yii;
use yii\web\Response;

//use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
//use app\assets\AppAsset;


\Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
$headers = \Yii::$app->response->headers;
$headers->add('Content-Type', 'application/json');

echo $content;
?>