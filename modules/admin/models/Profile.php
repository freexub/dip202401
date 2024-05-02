<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $user_id
 * @property string $sname
 * @property string $name
 * @property string|null $fname
 * @property string|null $position
 */
class Profile extends \yii\db\ActiveRecord
{
    public $position;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sname', 'name'], 'required'],
            [['sname', 'name', 'fname'], 'string', 'max' => 100],
            [['position'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'ID',
            'sname' => 'Фамилия',
            'name' => 'Имя',
            'fname' => 'Отчество',
        ];
    }

    public function getPosition(){
        return $this->hasOne(ProfilePosition::class, ['user_id' => 'user_id']);
    }

    public function getPositions(){
        return $this->hasMany(ProfilePosition::class, ['user_id' => 'user_id']);
    }
}
