<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%mst_emp_ars_timings}}".
 *
 * @property integer $id
 * @property string $var_name
 * @property integer $mst_institution_id
 * @property string $var_value
 * @property string $desc
 */
class MstEmpArsTimings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mst_emp_ars_timings}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mst_institution_id'], 'integer'],
            [['var_value'], 'safe'],
            [['var_name'], 'string', 'max' => 50],
            [['desc'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'var_name' => 'Var Name',
            'mst_institution_id' => 'Mst Institution ID',
            'var_value' => 'Var Value',
            'desc' => 'Desc',
        ];
    }
}
