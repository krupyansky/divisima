<?php 

namespace app\controllers;

/**
 * Home page
 */
class HomeController extends AppController
{
	
	public function actionIndex()
	{
		return $this->render('index');
	}
	
}
