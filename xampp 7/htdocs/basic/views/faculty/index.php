<?php

use app\models\Users;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\FacultySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Faculties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculty-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Faculty', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <h4><!--<i class="icon fa fa-check"></i>Saved!</h4>-->
                <?= Yii::$app->session->getFlash('success') ?>
        </div>
    <?php endif; ?>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
           // 'id',
            array(
                'format' => 'image',
                'value'=>function($data) { return $data->imageurl; },

            ),
            'name',
            [
                'attribute'=>'department',
                'filter'=>ArrayHelper::map(Users::find()->asArray()->all(), 'username', 'username',['0'=>'Select']
                ),
            ],
            'email',
            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{view}{delete}{update}{email}',
                'buttons'=>[
                    'view' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                            'title' => Yii::t('yii', 'view'),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                             'title' => Yii::t('yii', 'delete'),
                     ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                            'title' => Yii::t('yii', 'update'),
                        ]);

                    },
                    'email' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-send"></span>', $url, [
                            'title' => Yii::t('yii', 'email'),
                        ]);

                    },

                ]
            ],

            ],
    ]); ?>
<?php Pjax::end(); ?></div>

<style>
    .glyphicon{
        padding: 5px !important;
    }
</style>
