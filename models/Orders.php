<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "{{%orders}}".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $street
 * @property string|null $city
 * @property string|null $zipcode
 * @property string|null $country
 * @property string|null $state
 * @property string|null $email
 * @property string|null $order_type
 * @property float|null $totalcost
 * @property int|null $user
 *
 * @property OrderDetails[] $orderDetails
 * @property Users $user0
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%orders}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['totalcost'], 'number'],
            [['user'], 'integer'],
            [['name', 'order_type'], 'string', 'max' => 50],
            [['street', 'city', 'zipcode', 'country', 'state', 'email'], 'string', 'max' => 255],
            [['user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'street' => 'Street',
            'city' => 'City',
            'zipcode' => 'Zipcode',
            'country' => 'Country',
            'state' => 'State',
            'email' => 'Email',
            'order_type' => 'Order Type',
            'totalcost' => 'Totalcost',
            'user' => 'User',
        ];
    }

    /**
     * Gets query for [[OrderDetails]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\OrderDetailsQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetails::className(), ['order_id' => 'id']);
    }

    /**
     * Gets query for [[User0]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\UsersQuery
     */
    public function getUser0()
    {
        return $this->hasOne(Users::className(), ['id' => 'user']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\OrdersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\OrdersQuery(get_called_class());
    }
}
