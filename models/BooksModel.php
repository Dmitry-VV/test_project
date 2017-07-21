<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "my_books".
 *
 * @property integer $id
 * @property string $title
 * @property integer $author_id
 */
class BooksModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%books}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'author_id'], 'required'],
            [['author_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заглавие',
            'author_id' => 'ID Автора',
            'author' => 'Автор',
            'author_name' => 'Автор',
        ];
    }
	public function getAuthors()
	{
		return $this->hasOne(AuthorsModel::className(), ['id' => 'author_id']);
	}
	public function fields()
	{
		return [
			'id', 
			'title', 
			'author'=> function(BooksModel $model){ return $model->authors->name; }
		];
	}
}
