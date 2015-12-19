<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Application;
use yii\web\UploadedFile;

class ApplicationController extends Controller
{
    public $layout = 'form';

    public function actionCreate()
    {
        $model = new Application();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->addUsers() && $model->addUsersRequest()) {
                return $this->redirect('/application');
            }
            return $this->render('view', ['model' => $model]);
        } else {
            return $this->render('create', ['model' => $model]);
        }
    }

    public function actionUpload()
    {
        $model = new Application();

        if (Yii::$app->request->isPost) {
            $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            if ($model->upload()) {
                // file is uploaded successfully
                return;
            }
        }

        return $this->render('create', ['model' => $model]);
    }
}