<?php 

namespace app\controllers;

use yii\web\Controller;

/**
 * General Controller Class
 */
class AppController extends Controller
{

	public function beforeAction($action)
	{
		$this->view->title = \Yii::$app->name;
		return parent::beforeAction($action);
	}

}
