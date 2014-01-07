<?php

class TransaksiController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
								'View','Create','Update',
								'Delete','Index','Admin','CreateAnonim','CetakFaktur'
						),
						'roles'=>array('Operator','Administrator'),
				),
				array('deny',  // deny all users
						'users'=>array('*'),
				),
		);
	}
	

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model            = new Transaksi;
		$model_detail     = new TransaksiDetail;
		$kode_produk_arr  = Yii::app()->request->getPost("kode_produk_arr"); 
		$qty_arr          = Yii::app()->request->getPost("qty_arr"); 
		$harga_arr        = Yii::app()->request->getPost("harga_arr");
		$total_arr        = Yii::app()->request->getPost("total_arr");
         
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);
		if(isset($_POST['Transaksi']))
		{   
			$user = Users::model()->findByAttributes(array("username"=>Yii::app()->user->id));		    
			$_POST['Transaksi']['id']   =  $user->kode_loket.":".Transaksi::model()->nextId();
			$model->attributes=$_POST['Transaksi'];
			if($model->save()) {
				foreach($kode_produk_arr as $kode_produk=>$the_data_arr) {
					$data_transaksi_detail = array("id"=>$user->kode_loket.":".Transaksi::model()->nextId(),
					                               "transaksi_id"=>$_POST['Transaksi']['id'],
					                               "kode_produk"=>$kode_produk,
							                       "qty"=>$qty_arr[$kode_produk][0],
					                               "harga"=>$harga_arr[$kode_produk][0]);
					$model_detail->attributes = $data_transaksi_detail;
					$model_detail->save();
				} 
				$this->redirect(array('view','id'=>$model->id));
			}
				
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionCreateAnonim() {
		$model           = new Transaksi;
		$model_detail    = new TransaksiDetail;
		$pelanggan       = Pelanggan::model()->findByPk(Yii::app()->params['pelangganAnonim']) ;
		$kode_produk_arr = Yii::app()->request->getPost("kode_produk_arr");
		$qty_arr         = Yii::app()->request->getPost("qty_arr");
		$harga_arr       = Yii::app()->request->getPost("harga_arr");
		$total_arr       = Yii::app()->request->getPost("total_arr"); 
		  
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Transaksi']))
		{
			$_POST['Transaksi']['kode_pelanggan'] = $_POST['Pelanggan']['kode_pelanggan'] ; 
			$user = Users::model()->findByAttributes(array("username"=>Yii::app()->user->id));
			$_POST['Transaksi']['id']   =  $user->kode_loket.":".Transaksi::model()->nextId();
			$model->attributes=$_POST['Transaksi'];
			if($model->save()) {
				foreach($kode_produk_arr as $kode_produk=>$the_data) {
					$qty   = $qty_arr[$kode_produk][0] ;
					$harga = $harga_arr[$kode_produk][0] ;
						
					TransaksiDetail::model()->doSaveOrUpdate(array("transaksi_id"=>$model->id,
					                                               "kode_produk"=>$kode_produk, 
					                                               "qty"=>$qty,
					                                               "harga"=>$harga,
					                                               "kode_loket"=>$user->kode_loket)) ;
				}				
				$this->redirect(array('view','id'=>$model->id));
			}
		
		}
		
		$this->render('createAnonim',array(
				'model'=>$model,
				'pelanggan'=>$pelanggan
		));		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Transaksi']))
		{
			$model->attributes=$_POST['Transaksi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Transaksi');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	/**
	 * Mencetak Faktur
	 */
	public function actionCetakFaktur() {
		die("W");
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Transaksi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Transaksi']))
			$model->attributes=$_GET['Transaksi'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Transaksi::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='transaksi-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
