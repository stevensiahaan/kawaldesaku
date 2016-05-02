<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Pembangunandesa;
use frontend\models\PembangunandesaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\TerminpembdesSearch;
use frontend\models\Terminpembdes;


/**
 * PembangunandesaController implements the CRUD actions for Pembangunandesa model.
 */
class PembangunandesaController extends Controller
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pembangunandesa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PembangunandesaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pembangunandesa model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $searchModel1 = new TerminpembdesSearch();
        $dataProvider1 = $searchModel1->search1($id);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'dataProvider1'=>$dataProvider1,
        ]);
    }

    /**
     * Creates a new Pembangunandesa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Pembangunandesa();
        $model->id_desa = $id;
        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                return $this->redirect(['/desa/view', 'id' => $model->id_desa]);
            }
            else{
                Yii::$app->session->setFlash('error','Maaf, ada yang salah dalam pengisian form');
                return $this->redirect(['/desa/view', 'id' => $model->id_desa]);
            }
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Pembangunandesa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pemb_desa]);
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Pembangunandesa model.
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
     * Finds the Pembangunandesa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pembangunandesa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pembangunandesa::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
