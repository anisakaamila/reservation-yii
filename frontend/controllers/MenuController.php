<?php

namespace frontend\controllers;

class MenuController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
