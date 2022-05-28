<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "footericon".
 *
 * @property int $id
 * @property string $icon
 * @property string $url
 */
class Footericon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'footericon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icon', 'url'], 'required'],
            [['icon', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'icon' => Yii::t('app', 'Icon'),
            'url' => Yii::t('app', 'Url'),
            'icon'=>'ikonka',
            'url'=>'Url manzil',
        ];
    }
}
