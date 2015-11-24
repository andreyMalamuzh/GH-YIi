<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Application;

class ApplicationController extends Controller
{
    public function actionCreate()
    {
        $model = new Application();

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            return $this->render('view', ['model' => $model]);
        } else {
            return $this->render('create', ['model' => $model]);
        }
    }
}