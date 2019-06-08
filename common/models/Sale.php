<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sale".
 *
 * @property int $product_id
 * @property int $client_id
 * @property int $quantity
 * @property double $total_price
 * @property string $sale_date
 * @property int $created_at
 *
 * @property Client $client
 * @property Product $product
 */
class Sale extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sale';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'client_id', 'quantity', 'sale_date', 'created_at'], 'required'],
            [['product_id', 'client_id', 'quantity', 'created_at'], 'integer'],
            [['total_price'], 'number'],
            [['sale_date'], 'safe'],
            [['client_id', 'product_id'], 'unique', 'targetAttribute' => ['client_id', 'product_id']],
            [['product_id', 'client_id'], 'unique', 'targetAttribute' => ['product_id', 'client_id']],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['client_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'ID de Produto',
            'client_id' => 'ID de Cliente',
            'quantity' => 'Quantidade',
            'total_price' => 'Preço Total',
            'sale_date' => 'Data da Venda',
            'created_at' => 'Data de Criação',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Client::className(), ['id' => 'client_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * {@inheritdoc}
     * @return SaleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SaleQuery(get_called_class());
    }
}
