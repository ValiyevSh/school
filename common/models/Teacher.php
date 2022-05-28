<?php

namespace common\models;

use gofuroov\multilingual\behaviors\MultilingualBehavior;
use gofuroov\multilingual\db\MultilingualLabelsTrait;
use gofuroov\multilingual\db\MultilingualQuery;

class Teacher extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%teacher}}';
    }

    public function behaviors()
    {
        return [
            'multilingual' => [
                'class' => MultilingualBehavior::className(),
                'languages' => [
                    'uz' => 'Uzbek',
                    'en' => 'English',
                    'ru' => 'Ruscha',

                ],
                'attributes' => [
                    'name', 'work','location','content',
                ]
            ],
        ];
    }

    public function rules()
    {
        return [
            [['name_uz'], 'required'],
            [['img'], 'string', 'max' => 127],
            [['name'], 'string', 'max' => 255],
            [['work'], 'string', 'max' => 255],
            [['location'], 'string', 'max' => 255],
            [['site'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 255],
            [['tel'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 255],
            [['content'], 'string'],

        ];
    }

    public function attributeLabels()
    {
        return [
            'img'=>'Rasm',
            'name'=>"Ism",
            'work'=>'Kasbi',
            'location'=>'Yashash manzili',
            'site'=>'Shahsiy web sayti',
            'tel'=>'Telefon raqam',
            'email'=>'Email manzil',
            'content'=>'Haqida malumot',
            'status'=>'Faolligi',
        ];
    }

    public static function find()
    {
        $query= new MultilingualQuery(get_called_class());
        return $query->multilingual();
    }

}

