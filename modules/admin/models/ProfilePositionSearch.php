<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\ProfilePosition;
use yii\helpers\VarDumper;

/**
 * ProfilePositionSearch represents the model behind the search form of `app\modules\admin\models\ProfilePosition`.
 */
class ProfilePositionSearch extends ProfilePosition
{
    public $sname;
    public $name;
    public $fname;
    public $position;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'active', 'user_id'], 'integer'],
            [['sname', 'name', 'fname', 'position'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ProfilePosition::find()
        ->joinWith(['profile','position']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }


//        VarDumper::dump($query->createCommand()->sql);
//        die();

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'profile.sname', $this->sname]);
        $query->andFilterWhere(['like', 'profile.name', $this->name]);
        $query->andFilterWhere(['like', 'profile.fname', $this->fname]);
        $query->andFilterWhere(['like', 'position.name', $this->position]);

        return $dataProvider;
    }
}
