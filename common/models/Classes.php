<?php

namespace common\models;

use gofuroov\multilingual\behaviors\MultilingualBehavior;
use gofuroov\multilingual\db\MultilingualLabelsTrait;
use gofuroov\multilingual\db\MultilingualQuery;

class Classes extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%classes}}';
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
                    'title', 'content','years_old','classes_size','carry_time','coures_duration',
                ]
            ],
        ];
    }

    public function rules()
    {
        return [
            [['title_uz'], 'required'],
            [['img'], 'string', 'max' => 127],
            [['title'], 'string', 'max' => 255],
            [['start_date'], 'string', 'max' => 255],
            [['years_old'], 'string', 'max' => 255],
            [['classes_size'], 'string', 'max' => 255],
            [['carry_time'], 'string', 'max' => 255],
            [['coures_duration'], 'string', 'max' => 255],
            [['rating'], 'string', 'max' => 255],
            [['tution_free'], 'string', 'max' => 255],
            [['productid'], 'string', 'max' => 255],

            [['time'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 255],
            [['content'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'title'=>'Sarlavha',
            'content'=>"Ma'lumot",
            'img'=>'Rasm',
            'time'=>'Darslar kunlik davomiyligi',
            'productid'=>'productid',
            'tution_free'=>'Narxi',
            'rating'=>'Darslarga berilgan baho',
            'coures_duration'=>'Darslar umumiy davomiyligi-oyda',
            'carry_time'=>'Haftada necha soatligi',
            'classes_size'=>'Sinfda bolalar soni',
            'years_old'=>'Necha yillik davomiyligi',
            'start_date'=>'Darslar boshlanish vaqti sana',
            'status'=>'Faolligi',
        ];
    }

    public static function find()
    {
        $query= new MultilingualQuery(get_called_class());
        return $query->multilingual();
    }

}

