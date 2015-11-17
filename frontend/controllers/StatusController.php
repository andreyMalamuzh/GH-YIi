<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Status;
use yii\web\Controller;

class StatusController extends Controller
{
    public function actionCreate()
    {
        $model = new Status();

        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            return $this->render('view', ['model' => $model]);
        } else {
            return $this->render('create', ['model' => $model]);
        }
    }
}