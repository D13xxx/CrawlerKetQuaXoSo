<?php

namespace common\models\query;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Soicau;

/**
 * SoicauQuery represents the model behind the search form about `common\models\Soicau`.
 */
class SoicauQuery extends Soicau
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'province'], 'integer'],
            [['data', 'date', 'create_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Soicau::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
            'province' => $this->province,
            'create_date' => $this->create_date,
        ]);

        $query->andFilterWhere(['like', 'data', $this->data]);

        return $dataProvider;
    }
}
