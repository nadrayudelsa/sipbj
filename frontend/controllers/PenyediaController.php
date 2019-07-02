<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Penyedia;
use frontend\models\PenyediaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * PenyediaController implements the CRUD actions for Penyedia model.
 */
class PenyediaController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Penyedia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PenyediaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Penyedia model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Penyedia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Penyedia();

        if ($model->load(Yii::$app->request->post())) {

            $model->tanggal_masuk = date('Y-m-d h:m:s');
            $model->status_bu = 1;
            $model->prestasi = 6;
            $model->save(false);
            
            return $this->redirect(['view', 'id' => $model->id_penyedia]);
        }else{
            return $this->render('create', [
            'model' => $model,
            ]);    
        }
    }

    public function actionCreate2(){

        $model = new Penyedia();

        if ($model->load(Yii::$app->request->post())) {            
            $file = \yii\web\UploadedFile::getInstance($model, 'bukti_pengurus');
            if (!empty($file))
                $model->bukti_pengurus = $file;

            if($model->save())
            {
             if (!empty($file))
              $file->saveAs( Yii::getAlias('@root') .'/uploads/' . $file);

              return $this->redirect(['view', 'id' => $model->id]);
            }
            return $this->render('create2', ['model' => $model]);
        } else {
            return $this->render('create2', ['model' => $model]);
        }
    }


    // public function actionDistrict($id)
    // {
    // $villages = Village::find()->where([‘district_id’ => $id])->all();

    // foreach ($villages as $village)
    // {
    // echo Html::tag(‘option’, Html::encode($village->name), [‘value’ => $village->name]);
    // }

    /**
     * Updates an existing Penyedia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_penyedia]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionUpdate2($id){
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())){           
            $file = \yii\web\UploadedFile::getInstance($model, 'bukti_pengurus');
           if (!empty($file)){
                 $delete = $model->oldAttributes['bukti_pengurus'];
                 $model->bukti_pengurus= $file; 
            }
            else{
                $model->bukti_pengurus = $model->oldAttributes['bukti_pengurus'];
            }
            if($model->save())
            {
             if (!empty($file))
              $file->saveAs( Yii::getAlias('@root') .'/uploads/' . $file);

              return $this->redirect(['view', 'id' => $model->id]);
            }
            return $this->render('update2', ['model' => $model]);
        } else {
            return $this->render('update2', ['model' => $model]);
        }
    }


    public function actionUpdate3($id)
    {
        $model = $this->findModel($id);

        //Set the path that the file will be uploaded to
        // $path = Yii::getAlias('@frontend') .'/web/uploads/';

        if ($model->load(Yii::$app->request->post())) {

            // get instance of the uploaded bukti_pengurus
            $fileName = $model->nama_bu;
            $fileName2 = $model->id_penyedia;

             $model->bukti_pengurus = UploadedFile::getInstance($model,'bukti_pengurus');
            if(!$model->bukti_pengurus == null){
                $model->bukti_pengurus->saveAs('uploads/'.$fileName.'-pengurus-'.$fileName2.'.'.$model->bukti_pengurus->extension);
                // save the path in the db column
                $model->bukti_pengurus = 'uploads/'.$fileName.'-pengurus-'.$fileName2.'.'.$model->bukti_pengurus->extension;
            }else{
                Yii::$app->session->setFlash('error', "Bukti Pengurus Harus Diinputkan!");
                return $this->render('update2', [
                    'model' => $model, 'id' => $model->id_penyedia,
                ]);
            }          
            
            $model->bukti_SIU = UploadedFile::getInstance($model,'bukti_SIU');
            if(!$model->bukti_SIU == null){
                $model->bukti_SIU->saveAs('uploads/'.$fileName.'-SIU-'.$fileName2.'.'.$model->bukti_SIU->extension);
                // save the path in the db column
                $model->bukti_SIU = 'uploads/'.$fileName.'-SIU-'.$fileName2.'.'.$model->bukti_SIU->extension;
            }else{
                Yii::$app->session->setFlash('error', "Bukti Surat Izin Usaha Harus Diinputkan!");
                return $this->render('update2', [
                    'model' => $model, 'id' => $model->id_penyedia,
                ]);
            }

            $model->bukti_npwp = UploadedFile::getInstance($model,'bukti_npwp');
            if(!$model->bukti_npwp == null){
                $model->bukti_npwp->saveAs('uploads/'.$fileName.'-npwp-'.$fileName2.'.'.$model->bukti_npwp->extension);
                // save the path in the db column
                $model->bukti_npwp = 'uploads/'.$fileName.'-npwp-'.$fileName2.'.'.$model->bukti_npwp->extension;
            }else{
                Yii::$app->session->setFlash('error', "Bukti NPWP Harus Diinputkan!");
                return $this->render('update2', [
                    'model' => $model, 'id' => $model->id_penyedia,
                ]);
            }

            $model->bukti_domisili = UploadedFile::getInstance($model,'bukti_domisili');
            if(!$model->bukti_domisili == null){
                $model->bukti_domisili->saveAs('uploads/'.$fileName.'-domisili-'.$fileName2.'.'.$model->bukti_domisili->extension);
                // save the path in the db column
                $model->bukti_domisili = 'uploads/'.$fileName.'-domisili-'.$fileName2.'.'.$model->bukti_domisili->extension;
            }else{
                Yii::$app->session->setFlash('error', "Bukti Domisili Harus Diinputkan!");
                return $this->render('update2', [
                    'model' => $model, 'id' => $model->id_penyedia,
                ]);
            }

            $model->bukti_akta = UploadedFile::getInstance($model,'bukti_akta');
            if(!$model->bukti_akta == null){
                $model->bukti_akta->saveAs('uploads/'.$fileName.'-akta-'.$fileName2.'.'.$model->bukti_akta->extension);
                // save the path in the db column
                $model->bukti_akta = 'uploads/'.$fileName.'-akta-'.$fileName2.'.'.$model->bukti_akta->extension;
            }else{
                Yii::$app->session->setFlash('error', "Bukti Akta Harus Diinputkan!");
                return $this->render('update2', [
                    'model' => $model, 'id' => $model->id_penyedia,
                ]);
            }

            $model->bukti_pajak = UploadedFile::getInstance($model,'bukti_pajak');
            if(!$model->bukti_pajak == null){
                $model->bukti_pajak->saveAs('uploads/'.$fileName.'-pajak-'.$fileName2.'.'.$model->bukti_pajak->extension);
                // save the path in the db column
                $model->bukti_pajak = 'uploads/'.$fileName.'-pajak-'.$fileName2.'.'.$model->bukti_pajak->extension;
            }else{
                Yii::$app->session->setFlash('error', "Bukti Pajak Harus Diinputkan!");
                return $this->render('update2', [
                    'model' => $model, 'id' => $model->id_penyedia,
                ]);
            }

            // $model->bukti_npwp = UploadedFile::getInstance($model,'bukti_npwp');
            // $model->bukti_npwp->saveAs('uploads/'.$fileName.'-npwp-'.$fileName2.'.'.$model->bukti_npwp->extension);
            // $model->bukti_domisili = UploadedFile::getInstance($model,'bukti_domisili');
            // $model->bukti_domisili->saveAs('uploads/'.$fileName.'-domisili-'.$fileName2.'.'.$model->bukti_domisili->extension);
            // $model->bukti_akta = UploadedFile::getInstance($model,'bukti_akta');
            // $model->bukti_akta->saveAs('uploads/'.$fileName.'-akta-'.$fileName2.'.'.$model->bukti_akta->extension);
            // $model->bukti_pajak = UploadedFile::getInstance($model,'bukti_pajak');
            // $model->bukti_pajak->saveAs('uploads/'.$fileName.'-pajak-'.$fileName2.'.'.$model->bukti_pajak->extension);

            // $model->bukti_npwp = 'uploads/'.$fileName.'-npwp-'.$fileName2.'.'.$model->bukti_npwp->extension;
            // $model->bukti_domisili = 'uploads/'.$fileName.'-domisili-'.$fileName2.'.'.$model->bukti_domisili->extension;
            // $model->bukti_akta = 'uploads/'.$fileName.'-akta-'.$fileName2.'.'.$model->bukti_akta->extension;
            // $model->bukti_pajak = 'uploads/'.$fileName.'-pajak-'.$fileName2.'.'.$model->bukti_pajak->extension;

            
            // $model->bukti_pengurus = $imageFile1->baseName.'.'.$imageFile1->extension;
            $model->save(false);
            
            Yii::$app->session->setFlash('success', "Bukti Pengurus Diinputkan!");
            return $this->redirect(['view', 'id' => $model->id_penyedia]);
        }

        return $this->render('update2', [
            'model' => $model, 'id' => $model->id_penyedia,
        ]);
    }

    // public function actionUpdate2($id)
    // {
    //     $model = $this->findModel($id);

    //     //Set the path that the file will be uploaded to
    //     // $path = Yii::getAlias('@frontend') .'/web/uploads/';

    //     if ($model->load(Yii::$app->request->post())) {

    //         //get instance of the uploaded bukti_pengurus
    //         // $fileName = $model->nama_bu;
    //         // $fileName2 = $model->id_penyedia;

    //         $imageFile1 = UploadedFile::getInstance($model,'bukti_pengurus');
    //         if(isset($imageFile1->size)){

    //             if(!file_exists((Url::to('@webfront/uploads/pengurus/')))){
    //                 mkdir(Url::to('@webfront/uploads/pengurus/'),0777,true);
    //             }

    //             $imageName1 = Url::to('@webfront/uploads/pengurus/').'/'.$imageFile1->baseName.'.'.$imageFile1->extension;
    //             $imageFile1->saveAs($imageName1);

                
    //         }else{
    //             Yii::$app->session->setFlash('error', "Bukti Pengurus Harus Diinputkan!");
    //             return $this->render('update2', [
    //                 'model' => $model, 'id' => $model->id_penyedia,
    //             ]);
    //         }
            
            
    //         $model->bukti_pengurus = $imageFile1->baseName.'.'.$imageFile1->extension;
    //         $model->save(false);
            
    //         Yii::$app->session->setFlash('success', "Bukti Pengurus Diinputkan!");
    //         return $this->redirect(['view', 'id' => $model->id_penyedia]);
    //     }

    //     return $this->render('update2', [
    //         'model' => $model, 'id' => $model->id_penyedia,
    //     ]);
    // }


    /**
     * Deletes an existing Penyedia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionDelete($id)
    // {
    //     $this->findModel($id)->delete();

    //     return $this->redirect(['index']);
    // }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        if(file_exists(Yii::getAlias('@root') . '/uploads/'. $model->bukti_pengurus))
        unlink(Yii::getAlias('@root') . '/uploads/'. $model->bukti_pengurus);
        $model->delete(); 
         return $this->redirect(['index']);
    }

    /**
     * Finds the Penyedia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Penyedia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Penyedia::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionProvinsi($id)
    {               
        $regencies = \frontend\models\Regencies::find()
                ->where(['province_id' => $id])
                ->orderBy('id ASC')
                ->all();

        if ($regencies) {
            echo "<option> - Pilih Kabupaten -</option>";
            foreach($regencies as $regency) {
                echo "<option value='".$regency->id."'>".$regency->id . " " . $regency->name."</option>";
            }
        } else
            echo "<option>-</option>";

    }
}
