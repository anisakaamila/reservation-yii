<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $harga
 * @property int $id_item_category
 *
 * @property ItemCategory $itemCategory
 * @property OrderDetail[] $orderDetails
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'harga', 'id_item_category'], 'required'],
            [['description'], 'string'],
            [['harga', 'id_item_category'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['id_item_category'], 'exist', 'skipOnError' => true, 'targetClass' => ItemCategory::className(), 'targetAttribute' => ['id_item_category' => 'id']],
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
            'description' => 'Description',
            'harga' => 'Harga',
            'id_item_category' => 'Id Item Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemCategory()
    {
        return $this->hasOne(ItemCategory::className(), ['id' => 'id_item_category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['id_item' => 'id']);
    }
}
