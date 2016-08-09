<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property integer $id
 * @property string $name
 * @property string $birth_date
 * @property string $birth_place
 * @property string $email
 * @property string $phone
 * @property string $avatar
 * @property string $type
 * @property integer $vehicle_id
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'birth_date', 'birth_place', 'email', 'phone', 'type', 'vehicle_id'], 'required'],
            [['birth_date'], 'safe'],
            [['vehicle_id'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['birth_place'], 'string', 'max' => 64],
            [['email', 'avatar'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 40],
            [['type'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'birth_date' => 'Birth Date',
            'birth_place' => 'Birth Place',
            'email' => 'Email',
            'phone' => 'Phone',
            'avatar' => 'Avatar',
            'type' => 'Type',
            'vehicle_id' => 'Vehicle ID',
        ];
    }
}
