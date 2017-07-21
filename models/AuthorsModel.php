<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%authors}}".
 *
 * @property integer $id
 * @property string $name
 */
class AuthorsModel extends \yii\db\ActiveRecord
{
	public $book_count = 0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%authors}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Фамилия Имя Отчество',
            'book_count' => 'Кол-во изданий'
        ];
    }
    public function getBooks()
    {
        return $this->hasMany(BooksModel::className(), ['author_id' => 'id']);
    }
    public function afterFind()
    {
    	$this->book_count = count($this->books);
    }
	public function fields()
	{
		return [
			'id', 
			'name', 
			'book_count'=> function(AuthorsModel $model){ return count($model->books); }
		];
	}
}
