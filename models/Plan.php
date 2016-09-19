<?php
namespace app\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

class Plan extends ActiveRecord
{

    public function rules()
    {
        return [
            [['title'], 'required'],
            [['preview'], 'file'],
            [['duration'], 'string'],
            [['content'], 'string'],
            [['diploma'], 'string'],
            [['cena'], 'string'],
            

        ];
    }
    
    
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