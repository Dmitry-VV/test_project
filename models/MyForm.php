<?php
namespace app\models;

use Yii;
use yii\base\Model;

class MyForm extends Model
{
	public $name;
	public $email;
	public $file4;

	public function rules()
	{
		return [
//			[['name', 'email'], 'required', 'message' => 'Представтесь пожалуйста'],
//			['email', 'email', 'message' => 'Некорректный e-mail адрес'],
			['file4', 'file']
		];
	}
}
?>