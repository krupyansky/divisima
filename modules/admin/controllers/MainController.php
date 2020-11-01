<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\modules\admin\controllers;

/**
 * Description of MainController
 *
 * @author Krupy
 */
class MainController extends AppAdminController
{
    
    public function actionIndex()
    {
        $this->setMeta(\Yii::$app->name . "::Admin | Главная");
        return $this->render('index');
    }
    
    public function actionTest()
    {
        return $this->render('test');
    }
    
}
