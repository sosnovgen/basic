<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;


class Full extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'full';
    }
//----------------------------------------------------------------
    public function getPlan()
    {
        return $this->hasOne(Plan::className(), ['id' => 'plan_id']);
    }

//----------------------------------------------------------------

    public function rules()
    {
        return [
            [['plan_id'], 'required'],
            [['plan_id'], 'integer'],
            [['content'], 'string'],
            [['created_at'], 'safe'],
        ];
    }
//----------------------------------------------------------------

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => false,
                'value' => new Expression('NOW()'),
            ],
        ];
    }
}
