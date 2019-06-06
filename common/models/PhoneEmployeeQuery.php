<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[PhoneEmployee]].
 *
 * @see PhoneEmployee
 */
class PhoneEmployeeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PhoneEmployee[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PhoneEmployee|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
