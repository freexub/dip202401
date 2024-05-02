<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "position".
 *
 * @property int $id
 * @property string $name
 * @property string $about
 * @property int|null $active
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'position';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['active','about'], 'safe'],
            [['name'], 'string', 'max' => 250],
            [['about'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Должность',
            'about' => 'Описание',
            'active' => 'Статус',
        ];
    }

    public function getProfiles(){
        return $this->hasOne(ProfilePosition::class, ['position_id' => 'id']);
    }
}
