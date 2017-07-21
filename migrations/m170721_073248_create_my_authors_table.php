<?php

use yii\db\Migration;

/**
 * Handles the creation of table `my_authors`.
 */
class m170721_073248_create_my_authors_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('my_authors', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('my_authors');
    }
}
