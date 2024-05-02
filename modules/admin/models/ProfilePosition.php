<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "profile_position".
 *
 * @property int $id
 * @property int $user_id
 * @property int $position_id
 * @property string $date_create
 * @property int $active
 */
class ProfilePosition extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile_position';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'position_id', 'active'], 'required'],
            [['user_id', 'position_id', 'active'], 'integer'],
            [['date_create'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'position_id' => 'Position ID',
            'date_create' => 'Date Create',
            'active' => 'Active',
        ];
    }

    public function getProfile(){
        return $this->hasOne(Profile::class, ['user_id' => 'user_id']);
    }

    public function getPosition(){
        return $this->hasOne(Position::class, ['id' => 'position_id']);
    }
}
