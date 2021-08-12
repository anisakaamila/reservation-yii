<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $tanggal_pesan
 * @property string $jam_pesan
 * @property int $jumlah_orang
 * @property string $bukti_pembayaran
 * @property int $status
 * @property int $id_user
 *
 * @property User $user
 * @property OrderDetail[] $orderDetails
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_pesan', 'jam_pesan', 'jumlah_orang', 'status', 'id_user'], 'required'],
            [['tanggal_pesan', 'jam_pesan'], 'safe'],
            [['jumlah_orang', 'status', 'id_user'], 'integer'],
            [['bukti_pembayaran'], 'string'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanggal_pesan' => 'Tanggal Pesan',
            'jam_pesan' => 'Jam Pesan',
            'jumlah_orang' => 'Jumlah Orang',
            'bukti_pembayaran' => 'Bukti Pembayaran',
            'status' => 'Status',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['id_order' => 'id']);
    }
}
