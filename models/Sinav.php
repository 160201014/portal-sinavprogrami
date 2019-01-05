<?php

namespace kouosl\sinavprogrami\models;

use Yii;

/**
 * This is the model class for table "sinav".
 *
 * @property int $id
 * @property string $tarih
 * @property string $saat
 * @property string $yer
 * @property string $akademisyen
 */
class Sinav extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sinav';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tarih', 'saat', 'yer', 'akademisyen'], 'required'],
            [['tarih', 'saat'], 'string', 'max' => 50],
            [['yer'], 'string', 'max' => 100],
            [['akademisyen'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tarih' => 'Tarih',
            'saat' => 'Saat',
            'yer' => 'Yer',
            'akademisyen' => 'Akademisyen',
        ];
    }
}
