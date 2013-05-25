<?php

class DashboardController extends Controller
{

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
				'accessControl', // perform access control for CRUD operations
		);
	}
	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
				array('allow',
						'actions'=>array(
								'Index'
						),
						'roles'=>array('Administrator','Operator'),
				),
				array('deny',  // deny all users
						'users'=>array('*'),
				),
		);
	}
		
	public function actionIndex()
	{
		$this->render('index');
	}
}