<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order_detail".
 *
 * @property int $id
 * @property int $quantity
 * @property int $id_order
 * @property int $id_item
 *
 * @property Item $item
 * @property Order $order
 */
class OrderDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity', 'id_order', 'id_item'], 'required'],
            [['quantity', 'id_order', 'id_item'], 'integer'],
            [['id_item'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['id_item' => 'id']],
            [['id_order'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['id_order' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quantity' => 'Quantity',
            'id_order' => 'Id Order',
            'id_item' => 'Id Item',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['id' => 'id_item']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'id_order']);
    }
}
