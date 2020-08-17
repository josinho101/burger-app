<?php

use yii\db\Migration;

/**
 * Class m200817_061836_orders_detail
 */
class m200817_061836_orders_detail extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order_details', [
            'id' => $this->primaryKey(),
            'count' => $this->integer(),
            'order_id' => $this->integer(),
            'ingredient_id' => $this->integer()
        ]);
        $this->addForeignKey('FK_order_details_orders', 'order_details', 'order_id', 'orders', 'id');
        $this->addForeignKey('FK_order_details_ingredients', 'order_details', 'ingredient_id', 'ingredients', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('order_id', 'order_details');
        $this->dropForeignKey('ingredient_id', 'order_details');
        $this->dropTable('order_details');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200817_061836_orders_detail cannot be reverted.\n";

        return false;
    }
    */
}
