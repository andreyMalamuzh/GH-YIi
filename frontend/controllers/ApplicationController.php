<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Application;

class ApplicationController extends Controller
{
    public $layout = 'form';

    public function actionCreate()
    {
        $model = new Application();
        if ($model->load(Yii::$app->request->post())) {
            if ($users = $model->addUser() && $usersRequest = $model->addUserRequest()) {
                return $this->render('view', [
                    'model' => $model,
                ]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
}