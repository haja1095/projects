<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TblClassSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Classes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-content">
    <div class="page-header">
        <h1>
            <?= Html::encode($this->title) ?>
        </h1>
    </div>
    <div class="tbl-class-index">

                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        
        <p>
            <?= Html::a('Create Tbl Class', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
        </p>
        <?php Pjax::begin(); ?>                    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

                        'id',
            'class_name',

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'<div class="hidden-sm hidden-xs action-buttons">{view}{update}{delete}</div>
            <div class="hidden-md hidden-lg"><div class="inline pos-rel">
                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-position="auto" data-toggle="dropdown">
                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                        <li>{res_view}</li>
                        <li>{res_update}</li>
                        <li>{res_delete}</li>
                    </ul>
                </div></div>',
                            'buttons'=>[
                            'view' => function ($view_url, $model) {
                            $view_title = Yii::t('yii', 'View');
                            return Html::a('<i class="ace-icon fa fa-search-plus bigger-130"></i>', $view_url, array('class'=>'blue', 'title'=>$view_title));
                                                                                                 },
                                                                                                 'update' => function ($edit_url, $model) {
                                                                                                 $edit_title = Yii::t('yii', 'Edit');
                                                                                                 return Html::a('<i class="ace-icon fa fa-pencil bigger-130"></i>', $edit_url, array('class'=>'green', 'title'=>$edit_title));
                                                                                                                                                                 },
                                                                                                                                                                 'delete' => function ($delete_url, $model) {
                                                                                                                                                                 $delete_title = Yii::t('yii', 'Delete');
                                                                                                                                                                 return Html::a('<i class="ace-icon fa fa-trash-o bigger-130"></i>', $delete_url, array('class'=>'red', 'data-method'=>'post', 'data-confirm'=>Yii::t('yii', 'Are you sure you want to delete this item?'), 'title'=>$delete_title));
                                                                                                                                                                                                                                  },
                                                                                                                                                                                                                                  'res_view' => function ($view_url, $model) {
                                                                                                                                                                                                                                  $view_title = Yii::t('yii', 'View');
                                                                                                                                                                                                                                  return Html::a('<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span>', $view_url, array('class'=>'tooltip-info', 'data-rel'=>'tooltip', 'title'=>'', 'data-original-title'=>$view_title));
                                                                                                                                                                                                                                                                                                                                 },
                                                                                                                                                                                                                                                                                                                                 'res_update' => function ($edit_url, $model) {
                                                                                                                                                                                                                                                                                                                                 $edit_title = Yii::t('yii', 'Edit');
                                                                                                                                                                                                                                                                                                                                 return Html::a('<span class="green"><i class="ace-icon fa fa-pencil-square-o bigger-120"></i></span>', $edit_url, array('class'=>'tooltip-info', 'data-rel'=>'tooltip', 'title'=>'', 'data-original-title'=>$edit_title));
                                                                                                                                                                                                                                                                                                                                                                                                                                     },
                                                                                                                                                                                                                                                                                                                                                                                                                                     'res_delete' => function ($delete_url, $model) {
                                                                                                                                                                                                                                                                                                                                                                                                                                     $delete_title = Yii::t('yii', 'Delete');
                                                                                                                                                                                                                                                                                                                                                                                                                                     return Html::a('<span class="red"><i class="ace-icon fa fa-trash-o bigger-120"></i></span>', $delete_url, array('class'=>'tooltip-info', 'data-rel'=>'tooltip', 'title'=>'', 'data-confirm'=>Yii::t('yii', 'Are you sure you want to delete this item?'), 'data-method'=>'post', 'data-original-title'=>$delete_title));
            },
            ],
            'urlCreator' => function ($action, $model, $key, $index) {
            if ($action === 'res_view' || $action === 'view') {
            return array('view', 'id'=>$model->id);
            } else if($action === 'res_update' || $action === 'update') {
            return array('update', 'id'=>$model->id);
            } else if($action === 'res_delete' || $action === 'delete') {
            return array('delete', 'id'=>$model->id);
            }
            },
            'headerOptions' => ['style' => 'width:100px; text-align: center']
            ],
            ],
            ]); ?>
                <?php Pjax::end(); ?>    </div>
</div>