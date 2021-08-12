<?php

namespace frontend\controllers;
use yii\web\Controller;

class IdController extends Controller
{
    public function actionIndex()
    {
         return $this->render('index');
    }

    
    public function actionIdBayar()
    {
         $this->layout = 'layout-baru';
         return $this->render('id-bayar');
    }
}

