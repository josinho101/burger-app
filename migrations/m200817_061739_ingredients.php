<?php

use yii\db\Migration;

/**
 * Class m200817_061739_ingredients
 */
class m200817_061739_ingredients extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ingredients', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'price' => $this->float()
        ]);

        $this->batchInsert('ingredients', ['name','price'], [['Salad',4.50],['Cheese',5.10],['Bacon',5.40],['Meat',6.40]]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('ingredients');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200817_061739_ingredients cannot be reverted.\n";

        return false;
    }
    */
}
