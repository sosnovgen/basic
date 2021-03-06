<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;


class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'curs'], 'required'],
            ['completed','default', 'value' => 'Не оплатил'],
            ['status','default', 'value' => 'Кандидат'],
            [['created_at'], 'safe'],
            [['content'], 'string', 'max' => 1024],
            [['name', 'phone', 'curs'], 'string', 'max' => 255],
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

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'curs' => 'Назварие курса',
            'content' => 'Сообщение',
            'completed' => 'Обработан',
            'status' => 'Статус',
            'created_at' => 'Created At',
        ];
    }
}
