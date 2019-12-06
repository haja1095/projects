<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MstAcademics;

/**
 * MstAcademicsSearch represents the model behind the search form about `app\models\MstAcademics`.
 */
class MstAcademicsSearch extends MstAcademics
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'mst_institution_id', 'mst_batch_id', 'mst_semester_id', 'mst_course_id', 'acd_duration', 'duration_type', 'status', 'is_deleted', 'created_by', 'modified_by', 'academic_year', 'inst_duration'], 'integer'],
            [['acd_name', 'acd_opendate', 'acd_closingdate', 'created_date', 'modified_date'], 'safe'],
            [['worked_duration'], 'number'],
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
        $query = MstAcademics::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'mst_institution_id' => $this->mst_institution_id,
            'mst_batch_id' => $this->mst_batch_id,
            'mst_semester_id' => $this->mst_semester_id,
            'mst_course_id' => $this->mst_course_id,
            'acd_opendate' => $this->acd_opendate,
            'acd_duration' => $this->acd_duration,
            'duration_type' => $this->duration_type,
            'acd_closingdate' => $this->acd_closingdate,
            'status' => $this->status,
            'is_deleted' => $this->is_deleted,
            'created_date' => $this->created_date,
            'created_by' => $this->created_by,
            'modified_date' => $this->modified_date,
            'modified_by' => $this->modified_by,
            'academic_year' => $this->academic_year,
            'worked_duration' => $this->worked_duration,
            'inst_duration' => $this->inst_duration,
        ]);

        $query->andFilterWhere(['like', 'acd_name', $this->acd_name]);

        return $dataProvider;
    }
}
