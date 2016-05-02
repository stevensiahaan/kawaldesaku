<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Desa;
use frontend\models\Binamasyarakat;
use frontend\models\Pembangunandesa;
use frontend\models\Dayamasyarakat;
use frontend\models\DesaSearch;
use frontend\models\BinamasyarakatSearch;
use frontend\models\DayamasyarakatSearch;
use frontend\models\PembangunandesaSearch;
use frontend\models\PenyelenggaraanpemdesSearch;
use frontend\models\Penyelenggaraanpemdes;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DesaController implements the CRUD actions for Desa model.
 */
class DesaController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Desa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DesaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

        public function actionIndexBckUp()
    {
        $searchModel = new DesaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Desa model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $searchModel1 = new BinamasyarakatSearch();
        $searchModel2 = new DayamasyarakatSearch();
        $searchModel3 = new PenyelenggaraanpemdesSearch();
        $searchModel4 = new PembangunandesaSearch();
        $dataProvider1 = $searchModel1->search1($id);
        $dataProvider2 = $searchModel2->search1($id);
        $dataProvider3 = $searchModel3->search1($id);
        $dataProvider4 = $searchModel4->search1($id);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'dataProvider1' => $dataProvider1,
            'dataProvider2' => $dataProvider2,
            'dataProvider3' => $dataProvider3,
            'dataProvider4' => $dataProvider4,

        ]);
    }

    /**
     * Creates a new Desa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Desa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_desa]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Desa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_desa]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Desa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

     public function actionLists($id) {
        $countDesa = \frontend\models\Desa::find()
                ->where(['id_kecamatan' => $id])
                ->count();

        $desa = \frontend\models\Desa::find()
                ->where(['id_kecamatan' => $id])
                ->all();

        if ($countDesa > 0) {
            foreach ($desa as $des) {
                echo "<option value='" . $des->id_desa . "'>" . $des->nama_desa . "</option>";
            }
        } else {
            echo "<option> - </option>";
        }
    }

    /**
     * Finds the Desa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Desa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Desa::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
