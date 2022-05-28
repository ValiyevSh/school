<?php

namespace common\models;

use gofuroov\multilingual\behaviors\MultilingualBehavior;
use gofuroov\multilingual\db\MultilingualLabelsTrait;
use gofuroov\multilingual\db\MultilingualQuery;

class Navbar extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%navbar}}';
    }

    public function behaviors()
    {
        return [
            'multilingual' => [
                'class' => MultilingualBehavior::className(),
                'languages' => [
                    'uz' => 'Uzbek',
                    'en' => 'English',
                    'ru' => 'Ruskiy',

                ],
                'attributes' => [
                    'name',
                ]
            ],
        ];
    }

    public function rules()
    {
        return [
            [['name_uz'], 'required'],
            [['url'], 'string', 'max' => 127],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public static function find()
    {

        $query= new MultilingualQuery(get_called_class());
        return $query->multilingual();
    }

    public  function attributeLabels()
    {
        return [
            'name'=>'Nomi',
            'url'=>'Manzili',
        ];
    }
}
