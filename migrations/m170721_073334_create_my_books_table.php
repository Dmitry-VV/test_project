<?php

use yii\db\Migration;

/**
 * Handles the creation of table `my_books`.
 */
class m170721_073334_create_my_books_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('my_books', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'author_id' => $this->integer(),
        ]);

        $this->addForeignKey(
        	'my_books_ibfk_1',
        	'my_books',
        	'author_id',
        	'my_authors',
        	'id',
        	'NO ACTION',
        	'NO ACTION'
        );
    }

//  CONSTRAINT `my_books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `my_authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('my_books');

		$this->dropForeignKey(
			'my_books_ibfk_1',
			'my_books'
		);
    }
}
