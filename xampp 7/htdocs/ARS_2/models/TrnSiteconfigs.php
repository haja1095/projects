<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%trn_siteconfigs}}".
 *
 * @property integer $id
 * @property string $var_name
 * @property string $var_value
 * @property string $var_name_desc
 * @property integer $status
 * @property integer $is_deleted
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 * @property integer $mst_institution_id
 */
class TrnSiteconfigs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%trn_siteconfigs}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'is_deleted', 'created_by', 'modified_by', 'mst_institution_id'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['var_name'], 'string', 'max' => 255],
            [['var_value', 'var_name_desc'], 'string', 'max' => 250],
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
            'var_value' => 'Var Value',
            'var_name_desc' => 'Var Name Desc',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'modified_date' => 'Modified Date',
            'modified_by' => 'Modified By',
            'mst_institution_id' => 'Mst Institution ID',
        ];
    }

    public static function getVarValueByName($var_name='',$inst_id=0)
    {

        if(!empty($var_name))
        {
            $varvalue= (new \yii\db\Query())->select(['var_value'])
                                            ->from('trn_siteconfigs')
                                            ->where([
                                                    'var_name'=>$var_name,
                                                    'status'=>1 ,
                                                    'is_deleted'=>0,
                                                    'mst_institution_id'=>$inst_id
                                                    ])
                                            ->one();

            if(!empty($varvalue))
            {
                return $varvalue['var_value'];
            }
            else
                return '';
        }
        else
            return '';
    }
}
