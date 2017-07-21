<?php

namespace app\modules\api\controllers;

use Yii;
//use yii\web\Request;
use yii\web\Controller;
use yii\rest\ActiveController;
//use app\models\BooksModel;

/**
 * Default controller for the `api` module
 */
//class V1Controller extends Controller
class V1Controller extends ActiveController
{
	public $modelClass = 'app\models\BooksModel';
}
