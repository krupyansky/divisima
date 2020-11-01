<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\modules\admin\controllers;

use app\models\LoginForm;
use Yii;

/**
 * Description of AuthController
 *
 * @author Krupy
 */
class AuthController extends AppAdminController
{
    
    public $layout = 'auth';
    
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect('/admin');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/admin');
        }

        $model->password = '';
        $this->setMeta(\Yii::$app->name . "::Admin | Авторизация");
        return $this->render('login', [
            'model' => $model,
        ]);
    }
    
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect('/admin');
    }
    
}
