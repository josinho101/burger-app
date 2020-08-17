<?php

use yii\db\Migration;

/**
 * Class m200817_061823_orders
 */
class m200817_061823_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('orders', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'street' =>  $this->string(255),
            'city' =>  $this->string(255),
            'zipcode' =>  $this->string(255),
            'country' =>  $this->string(255),
            'state' =>  $this->string(255),
            'email' =>  $this->string(255),
            'order_type' =>  $this->string(50),
            'totalcost' => $this->float(),
            'user' => $this->integer()
        ]);
        
        $this->addForeignKey('FK_orders_users', 'orders', 'user', 'users', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('user', 'orders');
        $this->dropTable('orders');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200817_061823_orders cannot be reverted.\n";

        return false;
    }
    */
}
