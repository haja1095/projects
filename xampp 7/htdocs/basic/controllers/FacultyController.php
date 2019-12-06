<?php

namespace app\controllers;

use Swift_Image;
use Swift_Message;
use Yii;
use app\models\Faculty;
use app\models\FacultySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * FacultyController implements the CRUD actions for Faculty model.
 */
class FacultyController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all Faculty models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FacultySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Faculty model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Faculty model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Faculty();

        if (Yii::$app->request->post())
        {
            $faculty =Yii::$app->request->post('Faculty');
            $model->photo = UploadedFile::getInstance($model, 'photo');
            $model->photo = $model->upload();
            $model->name = $faculty['name'];
            $model->department = $faculty['department'];
            $model->email = $faculty['email'];
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Faculty model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Faculty model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Faculty model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Faculty the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Faculty::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * @param $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionEmail($id)
    {
      /*  $data=$this->findModel($id);

        $message =Yii::$app->mailer->compose();
        $image = Swift_Image::fromPath(dirname(Yii::app()->getBasePath()) .'/uploads/'.$data['photo'].'');
        $cid = $message->embed($image);
        $message->setFrom('sathish.d@kgfsl.com');
        $message->setTo('sathish.d@kgfsl.com');
        $message->setSubject('test' . date('M d,Y'));
        $message->setBody(array('cid' => $cid), 'text/html');
        $message->send();*/




        $content = $this->renderPartial('mail', [
            'model' => $this->findModel($id),
        ]);

        $data=$this->findModel($id);

        $result =Yii::$app->mailer->compose('mail', ['logo' => Yii::getAlias('@app/web/uploads/'.$data['photo'].'')])
            ->setFrom('sathish.d@kgfsl.com')
            ->setTo('sathish.d@kgfsl.com')
            ->setSubject('test' . date('M d,Y'));
        $result =Yii::$app->mailer->compose($result)->send();

        if($result)
            Yii::$app->session->setFlash('success', "Mail sent");
        else
            Yii::$app->session->setFlash('success',"Mail not sent");

        return $this->redirect(['index']);
    }

}
