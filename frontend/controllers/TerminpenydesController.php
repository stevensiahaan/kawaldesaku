<?php

namespace frontend\controllers;

use Yii;
use app\models\Terminpenydes;
use frontend\models\TerminpenydesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * TerminpenydesController implements the CRUD actions for Terminpenydes model.
 */
class TerminpenydesController extends Controller
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
     * Lists all Terminpenydes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TerminpenydesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Terminpenydes model.
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
     * Creates a new Terminpenydes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Terminpenydes();
        $model->id_penydes = $id;
        $fileName1 = Yii::$app->security->generateRandomString();
        $fileName2 = Yii::$app->security->generateRandomString();
        $fileName3 = Yii::$app->security->generateRandomString();
        $fileName4 = Yii::$app->security->generateRandomString();
        $fileName5 = Yii::$app->security->generateRandomString();

        if ($model->load(Yii::$app->request->post())) {
            $foto1 = UploadedFile::getInstance($model, 'foto_1');
            $foto2 = UploadedFile::getInstance($model, 'foto_2');
            $foto3 = UploadedFile::getInstance($model, 'foto_3');
            $foto4 = UploadedFile::getInstance($model, 'foto_4');
            $foto5 = UploadedFile::getInstance($model, 'foto_5');
            if($foto1==NULL||$foto2==NULL){
                Yii::$app->session->setFlash('error','Maaf, ada harus memasukkan paling tidak dua foto');
                return $this->redirect(['/penyelenggaraanpemdes/view', 'id' => $model->id_penydes]);
            }
            if($foto1!=NULL){
                $model->foto_1 = $fileName1.".".$foto1->extension;
            }
            if($foto2!=NULL){
                $model->foto_2 = $fileName2.".".$foto2->extension;
            }
            if($foto3!=NULL){
                $model->foto_3 = $fileName3.".".$foto3->extension;
            }
            if($foto4!=NULL){
                $model->foto_4 = $fileName4.".".$foto4->extension;
            }
            if($foto5!=NULL){
                $model->foto_5 = $fileName5.".".$foto5->extension;
            }
            if($model->save()){
                if($foto1 !=NULL){
                    $foto1->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->foto_1);
                }
                if($foto2 !=NULL){
                    $foto2->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->foto_2);
                }
                if($foto3 !=NULL){
                    $foto3->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->foto_3);
                }
                if($foto4 !=NULL){
                    $foto4->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->foto_4);
                }
                if($foto5 !=NULL){
                    $foto5->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->foto_5);
                }
                return $this->redirect(['/penyelenggaraanpemdes/view', 'id' => $model->id_penydes]);
            }
            else{
                Yii::$app->session->setFlash('error','Maaf, ada yang salah dalam pengisian form');
                return $this->redirect(['/penyelenggaraanpemdes/view', 'id' => $model->id_penydes]);
            }
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Terminpenydes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $fileName1 = Yii::$app->security->generateRandomString();
        $fileName2 = Yii::$app->security->generateRandomString();
        $fileName3 = Yii::$app->security->generateRandomString();
        $fileName4 = Yii::$app->security->generateRandomString();
        $fileName5 = Yii::$app->security->generateRandomString();
        $fileName6 = Yii::$app->security->generateRandomString();
        $fileName7 = Yii::$app->security->generateRandomString();
        $fileName8 = Yii::$app->security->generateRandomString();
        $fileName9 = Yii::$app->security->generateRandomString();
        $fileName10 = Yii::$app->security->generateRandomString();
        $gbr1 = $model->foto_1;
        $gbr2 = $model->foto_2;
        $gbr3 = $model->foto_3;
        $gbr4 = $model->foto_4;
        $gbr5 = $model->foto_5;
        $att1 = $model->file_1;
        $att2 = $model->file_2;
        $att3 = $model->file_3;
        $att4 = $model->file_4;
        $att5 = $model->file_5;
        $a=0;
        $b=0;
        $c=0;
        $d=0;
        $e=0;
        $f=0;
        $g=0;
        $h=0;
        $i=0;
        $j=0;
        if ($model->load(Yii::$app->request->post())) {
            $foto1 = UploadedFile::getInstance($model, 'foto_1');
            $foto2 = UploadedFile::getInstance($model, 'foto_2');
            $foto3 = UploadedFile::getInstance($model, 'foto_3');
            $foto4 = UploadedFile::getInstance($model, 'foto_4');
            $foto5 = UploadedFile::getInstance($model, 'foto_5');
            $file1 = UploadedFile::getInstance($model, 'file_1');
            $file2 = UploadedFile::getInstance($model, 'file_2');
            $file3 = UploadedFile::getInstance($model, 'file_3');
            $file4 = UploadedFile::getInstance($model, 'file_4');
            $file5 = UploadedFile::getInstance($model, 'file_5');
            if($foto1!=NULL){
                $a = 1;
                $model->foto_1 = $fileName1.".".$foto1->extension;
            }
            if($foto1==NULL){
                $model->foto_1 = $gbr1;
            }
            if($foto2!=NULL){
                $b = 1;
                $model->foto_2 = $fileName2.".".$foto2->extension;
            }
            if($foto2==NULL){
                $model->foto_2 = $gbr2;
            }
            if($foto3!=NULL){
                $c = 1;
                $model->foto_3 = $fileName3.".".$foto3->extension;
            }
            if($foto3==NULL){
                $model->foto_3 = $gbr3;
            }
            if($foto4!=NULL){
                $d = 1;
                $model->foto_4 = $fileName4.".".$foto4->extension;
            }
            if($foto4==NULL){
                $model->foto_4 = $gbr4;
            }
            if($foto5!=NULL){
                $e = 1;
                $model->foto_5 = $fileName5.".".$foto5->extension;
            }          
            if($foto5==NULL){
                $model->foto_5 = $gbr5;
            }
            if($file1!=NULL){
                $f = 1;
                $model->file_1 = $fileName6.".".$file1->extension;
            }
            if($file1==NULL){
                $model->file_1 = $att1;
            }
            if($file2!=NULL){
                $g = 1;
                $model->file_2 = $fileName7.".".$file2->extension;
            }
            if($file2==NULL){
                $model->file_2 = $att2;
            }
            if($file3!=NULL){
                $h = 1;
                $model->file_3 = $fileName8.".".$file3->extension;
            }
            if($file3==NULL){
                $model->file_3 = $att3;
            }
            if($file4!=NULL){
                $i=1;
                $model->file_4 = $fileName9.".".$file4->extension;
            }
            if($file4==NULL){
                $model->file_4 = $att4;
            }
            if($file5!=NULL){
                $j = 1;
                $model->file_5 = $fileName10.".".$file5->extension;
            }
            if($file5==NULL){
                $model->file_5 = $att5;
            }
            if($model->save()){
                if($a==1){
                    $foto1->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->foto_1);
                }
                if($b==1){
                    $foto2->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->foto_2);
                }
                if($c==1){
                    $foto3->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->foto_3);
                }
                if($d==1){
                    $foto4->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->foto_4);
                }
                if($e==1){
                    $foto5->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->foto_5);
                }
                if($f==1){
                    $file1->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->file_1);
                }
                if($g==1){
                    $file2->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->file_2);
                }
                if($h==1){
                    $file3->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->file_3);
                }
                if($i==1){
                    $file4->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->file_4);
                }
                if($j==1){
                    $file5->saveAs(Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$model->file_5);
                }
                return $this->redirect(['view', 'id' => $model->id_terminpenydes]);
            }
            else{
                Yii::$app->session->setFlash('error','Maaf, ada yang salah dalam edit data');
                return $this->redirect(['view', 'id' => $model->id_terminpenydes]);
            }
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Terminpenydes model.
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
     * Finds the Terminpenydes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Terminpenydes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Terminpenydes::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionDownloadfile1($id) {
        $posts= Terminpenydes::find()->where(['id_terminpenydes'=>$id])->one();
        $src;
        $src = Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$posts->file_1;
        
        //echo $src;
        if (@file_exists($src)) {
            //echo 'ada';
            $path_parts = @pathinfo($src);
            //$mime = $this->__get_mime($path_parts['extension']);
            header('Content-Description: File Transfer');
            header('Content-Type: xlsx, xls,doc,docx,ppt,pptx,pdf'); //application/octet-stream//pdf,doc,docx
            //header('Content-Type: '.$mime);
            header('Content-Disposition: attachment; filename=' . $posts->file_1); //basename($src)
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Content-Length: ' . filesize($src));
            ob_clean();
            flush();
            readfile($src);
        } else {
           $message = "File tidak tersedia";
            $title = "Informasi";
            Yii::$app->session->setFlash('1', ['title' => $title, 'content' => $message]);
            return $this->redirect(['Terminbinmas/view','id_binmas'=>$id]);
            exit();
        }
    }

    public function actionDownloadfile2($id) {
        $posts= Terminpenydes::find()->where(['id_terminpenydes'=>$id])->one();
        $src;
        $src = Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$posts->file_2;
        
        //echo $src;
        if (@file_exists($src)) {
            //echo 'ada';
            $path_parts = @pathinfo($src);
            //$mime = $this->__get_mime($path_parts['extension']);
            header('Content-Description: File Transfer');
            header('Content-Type: xlsx, xls,doc,docx,ppt,pptx,pdf'); //application/octet-stream//pdf,doc,docx
            //header('Content-Type: '.$mime);
            header('Content-Disposition: attachment; filename=' . $posts->file_2); //basename($src)
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Content-Length: ' . filesize($src));
            ob_clean();
            flush();
            readfile($src);
        } else {
           $message = "File tidak tersedia";
            $title = "Informasi";
            Yii::$app->session->setFlash('1', ['title' => $title, 'content' => $message]);
            return $this->redirect(['Terminbinmas/view','id_binmas'=>$id]);
            exit();
        }
    }

    public function actionDownloadfile3($id) {
        $posts= Terminpenydes::find()->where(['id_terminpenydes'=>$id])->one();
        $src;
        $src = Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$posts->file_3;
        
        //echo $src;
        if (@file_exists($src)) {
            //echo 'ada';
            $path_parts = @pathinfo($src);
            //$mime = $this->__get_mime($path_parts['extension']);
            header('Content-Description: File Transfer');
            header('Content-Type: xlsx, xls,doc,docx,ppt,pptx,pdf'); //application/octet-stream//pdf,doc,docx
            //header('Content-Type: '.$mime);
            header('Content-Disposition: attachment; filename=' . $posts->file_3); //basename($src)
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Content-Length: ' . filesize($src));
            ob_clean();
            flush();
            readfile($src);
        } else {
           $message = "File tidak tersedia";
            $title = "Informasi";
            Yii::$app->session->setFlash('1', ['title' => $title, 'content' => $message]);
            return $this->redirect(['Terminbinmas/view','id_binmas'=>$id]);
            exit();
        }
    }

    public function actionDownloadfile4($id) {
        $posts= Terminpenydes::find()->where(['id_terminpenydes'=>$id])->one();
        $src;
        $src = Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$posts->file_4;
        
        //echo $src;
        if (@file_exists($src)) {
            //echo 'ada';
            $path_parts = @pathinfo($src);
            //$mime = $this->__get_mime($path_parts['extension']);
            header('Content-Description: File Transfer');
            header('Content-Type: xlsx, xls,doc,docx,ppt,pptx,pdf'); //application/octet-stream//pdf,doc,docx
            //header('Content-Type: '.$mime);
            header('Content-Disposition: attachment; filename=' . $posts->file_4); //basename($src)
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Content-Length: ' . filesize($src));
            ob_clean();
            flush();
            readfile($src);
        } else {
           $message = "File tidak tersedia";
            $title = "Informasi";
            Yii::$app->session->setFlash('1', ['title' => $title, 'content' => $message]);
            return $this->redirect(['Terminbinmas/view','id_binmas'=>$id]);
            exit();
        }
    }
    public function actionDownloadfile5($id) {
        $posts= Terminpenydes::find()->where(['id_terminpenydes'=>$id])->one();
        $src;
        $src = Yii::getAlias('Upload/').'terminPenyelenggaraanDesa/'.$posts->file_5;
        
        //echo $src;
        if (@file_exists($src)) {
            //echo 'ada';
            $path_parts = @pathinfo($src);
            //$mime = $this->__get_mime($path_parts['extension']);
            header('Content-Description: File Transfer');
            header('Content-Type: xlsx, xls,doc,docx,ppt,pptx,pdf'); //application/octet-stream//pdf,doc,docx
            //header('Content-Type: '.$mime);
            header('Content-Disposition: attachment; filename=' . $posts->file_5); //basename($src)
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Content-Length: ' . filesize($src));
            ob_clean();
            flush();
            readfile($src);
        } else {
           $message = "File tidak tersedia";
            $title = "Informasi";
            Yii::$app->session->setFlash('1', ['title' => $title, 'content' => $message]);
            return $this->redirect(['Terminbinmas/view','id_binmas'=>$id]);
            exit();
        }
    }
}
