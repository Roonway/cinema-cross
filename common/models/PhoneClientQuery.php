<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[PhoneClient]].
 *
 * @see PhoneClient
 */
class PhoneClientQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PhoneClient[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PhoneClient|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
