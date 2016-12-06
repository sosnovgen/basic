<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;


class Front extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'front';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['preview'], 'file'],
            [['content'], 'string'],
            [['cena'], 'number'],
            [['created_at'], 'safe'],
            [['title', 'group', 'duty', 'priznak'], 'string', 'max' => 255],
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
            'title' => 'Название',
            'preview' => 'Просмотр',
            'group' => 'Группа',
            'content' => 'Содержимое',
            'duty' => 'Длительность',
            'priznak' => 'Priznak',
            'cena' => 'Цена',
            'created_at' => 'Created At',
        ];
    }
}
