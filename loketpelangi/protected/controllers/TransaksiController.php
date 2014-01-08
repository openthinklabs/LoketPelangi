<?php
class TransaksiController extends Controller {
	/**
	 *
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 *      using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/column2';
	
	/**
	 *
	 * @return array action filters
	 */
	public function filters() {
		return array (
				'accessControl'  // perform access control for CRUD operations
				);
	}
	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * 
	 * @return array access control rules
	 */
	public function accessRules() {
		return array (
				array (
						'allow',
						'actions' => array (
								'View',
								'Create',
								'Update',
								'Delete',
								'Index',
								'Admin',
								'CreateAnonim',
								'CetakFaktur' 
						),
						'roles' => array (
								'Operator',
								'Administrator' 
						) 
				),
				array (
						'deny', // deny all users
						'users' => array (
								'*' 
						) 
				) 
		);
	}
	
	/**
	 * Displays a particular model.
	 * 
	 * @param integer $id
	 *        	the ID of the model to be displayed
	 */
	public function actionView($id) {
		$this->render ( 'view', array (
				'model' => $this->loadModel ( $id ) 
		) );
	}
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate() {
		$model = new Transaksi ();
		$model_detail = new TransaksiDetail ();
		$kode_produk_arr = Yii::app ()->request->getPost ( "kode_produk_arr" );
		$qty_arr = Yii::app ()->request->getPost ( "qty_arr" );
		$harga_arr = Yii::app ()->request->getPost ( "harga_arr" );
		$total_arr = Yii::app ()->request->getPost ( "total_arr" );
		
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation ( $model );
		if (isset ( $_POST ['Transaksi'] )) {
			$user = Users::model ()->findByAttributes ( array (
					"username" => Yii::app ()->user->id 
			) );
			$_POST ['Transaksi'] ['id'] = $user->kode_loket . ":" . Transaksi::model ()->nextId ();
			$model->attributes = $_POST ['Transaksi'];
			if ($model->save ()) {
				foreach ( $kode_produk_arr as $kode_produk => $the_data_arr ) {
					$data_transaksi_detail = array (
							"id" => $user->kode_loket . ":" . Transaksi::model ()->nextId (),
							"transaksi_id" => $_POST ['Transaksi'] ['id'],
							"kode_produk" => $kode_produk,
							"qty" => $qty_arr [$kode_produk] [0],
							"harga" => $harga_arr [$kode_produk] [0] 
					);
					$model_detail->attributes = $data_transaksi_detail;
					$model_detail->save ();
				}
				$this->redirect ( array (
						'view',
						'id' => $model->id 
				) );
			}
		}
		
		$this->render ( 'create', array (
				'model' => $model 
		) );
	}
	public function actionCreateAnonim() {
		$model = new Transaksi ();
		$model_detail = new TransaksiDetail ();
		$pelanggan = Pelanggan::model ()->findByPk ( Yii::app ()->params ['pelangganAnonim'] );
		$kode_produk_arr = Yii::app ()->request->getPost ( "kode_produk_arr" );
		$qty_arr = Yii::app ()->request->getPost ( "qty_arr" );
		$harga_arr = Yii::app ()->request->getPost ( "harga_arr" );
		$total_arr = Yii::app ()->request->getPost ( "total_arr" );
		
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation ( $model );
		
		if (isset ( $_POST ['Transaksi'] )) {
			$_POST ['Transaksi'] ['kode_pelanggan'] = $_POST ['Pelanggan'] ['kode_pelanggan'];
			$user = Users::model ()->findByAttributes ( array (
					"username" => Yii::app ()->user->id 
			) );
			$_POST ['Transaksi'] ['id'] = $user->kode_loket . ":" . Transaksi::model ()->nextId ();
			$model->attributes = $_POST ['Transaksi'];
			if ($model->save ()) {
				foreach ( $kode_produk_arr as $kode_produk => $the_data ) {
					$qty = $qty_arr [$kode_produk] [0];
					$harga = $harga_arr [$kode_produk] [0];
					
					TransaksiDetail::model ()->doSaveOrUpdate ( array (
							"transaksi_id" => $model->id,
							"kode_produk" => $kode_produk,
							"qty" => $qty,
							"harga" => $harga,
							"kode_loket" => $user->kode_loket 
					) );
				}
				$this->redirect ( array (
						'view',
						'id' => $model->id 
				) );
			}
		}
		
		$this->render ( 'createAnonim', array (
				'model' => $model,
				'pelanggan' => $pelanggan 
		) );
	}
	
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * 
	 * @param integer $id
	 *        	the ID of the model to be updated
	 */
	public function actionUpdate($id) {
		$model = $this->loadModel ( $id );
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if (isset ( $_POST ['Transaksi'] )) {
			$model->attributes = $_POST ['Transaksi'];
			if ($model->save ())
				$this->redirect ( array (
						'view',
						'id' => $model->id 
				) );
		}
		
		$this->render ( 'update', array (
				'model' => $model 
		) );
	}
	
	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * 
	 * @param integer $id
	 *        	the ID of the model to be deleted
	 */
	public function actionDelete($id) {
		if (Yii::app ()->request->isPostRequest) {
			// we only allow deletion via POST request
			$this->loadModel ( $id )->delete ();
			
			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (! isset ( $_GET ['ajax'] ))
				$this->redirect ( isset ( $_POST ['returnUrl'] ) ? $_POST ['returnUrl'] : array (
						'admin' 
				) );
		} else
			throw new CHttpException ( 400, 'Invalid request. Please do not repeat this request again.' );
	}
	
	/**
	 * Lists all models.
	 */
	public function actionIndex() {
		$dataProvider = new CActiveDataProvider ( 'Transaksi' );
		$this->render ( 'index', array (
				'dataProvider' => $dataProvider 
		) );
	}
	
	/**
	 * Mencetak Faktur
	 */
	public function actionCetakFaktur($id) {
		setlocale(LC_ALL, 'id_ID.UTF-8');
		Yii::app()->setLanguage('id_id');
		
		$margin_left          = 0 ; //18mm
		$margin_top           = 0 ; //37 mm
		$margin_right         = 0 ; //18 mm
		$width                = "220" ;
		$height               = "120" ;
		$orientation          = ($height>$width) ? 'P' : 'L';
		$model                = $this->loadModel ( $id ); 
		
		
		$pdf = Yii::createComponent ( 'application.extensions.tcpdf.ETcPdf', 'P', 'mm', "A4", true, 'UTF-8' );
		$pdf->SetCreator ( PDF_CREATOR );
		$pdf->SetAuthor ( "POS Loket pelangi" );
		$pdf->SetTitle ( "Faktur Penjualan" );
		$pdf->SetSubject ( "Faktur Penjualan" );
		$pdf->SetKeywords ( "POS Loket Pelangi" );
		$pdf->setPrintHeader ( false );
		$pdf->setPrintFooter ( false );
		
		// set page format (read source code documentation for further information)
		$page_format = array(
				'MediaBox' => array ('llx' => 0, 'lly' => 0, 'urx' => $width, 'ury' => $height),
				'CropBox' => array ('llx' => 0, 'lly' => 0, 'urx' => $width, 'ury' => $height),
				'BleedBox' => array ('llx' => 5, 'lly' => 5, 'urx' => $width-5, 'ury' => $height-5),
				'TrimBox' => array ('llx' => 10, 'lly' => 10, 'urx' => $width-10, 'ury' => $height-10),
				'ArtBox' => array ('llx' => 15, 'lly' => 15, 'urx' => $width-15, 'ury' => $height-15),
				'Dur' => 3,
				'trans' => array(
						'D' => 1.5,
						'S' => 'Split',
						'Dm' => 'V',
						'M' => 'O'
				),
				'Rotate' => 0,
				'PZ' => 1,
		);		
		
		$pdf->AddPage ("L",$page_format,false,false);
		
		$pdf->SetFont ( "times", "BI", 18 );
		$pdf->Cell ( 120, 10, "Loket Pelangi", 0, 1, 'L' );
		$pdf->SetFont ( "times", "", 10 );
		$pdf->MultiCell ( 120, 10, "Jln. Gandaria 4 RT. 12 RW. 02 \nKelurahan Pekayon, Kecamatan Pasar Rebo \nJakarta Timur 13710 \nTelp. 087884599249", 0, 'L',false,0);
		$pdf->Cell ( 0, 10, "Kepada Yth", 0, 1, 'L' );
		$pdf->Cell ( 120, 10, "", 0, 0, 'L' );
		$pdf->MultiCell ( 0, 10, "SIT Nurul Fikri\nAlamat ", 0, 'L',false,1);		
		
		$pdf->SetFont ( "times", "B", 14 );
		$pdf->Cell ( 0, 10, "Faktur", 0, 1, 'C' );
		
		$pdf->SetFont ( "times", "", 9 );
		
		$html = '<table cellpadding=0 cellspacing=0 border=0>
				 <thead>
				   <tr>
				     <th style="text-align:center;border-top:1px solid #000000;border-bottom:1px solid #000000">No</th>
				     <th style="text-align:center;border-top:1px solid #000000;border-bottom:1px solid #000000">Nama Produk</th>
				     <th style="text-align:center;border-top:1px solid #000000;border-bottom:1px solid #000000">Kwantitas</th>
				     <th style="text-align:center;border-top:1px solid #000000;border-bottom:1px solid #000000">Harga Satuan <br/> (Rp)</th>
				     <th style="text-align:center;border-top:1px solid #000000;border-bottom:1px solid #000000">Total <br/> (Rp)</th>
				   </tr>
				 </thead>
				 <tbody>';
		
		$no        = 1 ;
		$total_qty = 0 ; 
		$total     = 0 ;
	    foreach($model->transaksiDetails as $transaksiDetail){
	    $line_total  = $transaksiDetail->qty*$transaksiDetail->harga ; 
	    $total_qty  += $transaksiDetail->qty ;
	    $total      += $line_total ;
	    $html .= '<tr>
	    		    <td>'.$no.'</td>
	                <td>'.$transaksiDetail->kodeProduk->nama.'</td>
	                <td style="text-align:center;">'.$transaksiDetail->qty.'</td>
	                <td style="text-align:right">'.$transaksiDetail->harga.'</td>
	                <td style="text-align:right">'.Yii::app()->numberFormatter->formatCurrency($line_total,'IDR').'</td>
	              </tr>' ;
	      $no++ ; 
	    } 
		
	    $html .= '</tbody>
	    		  <tfoot>
	    		   <tr>
	    		    <td colspan="2" style="text-align:center;border-top:1px solid #000000;border-bottom:1px solid #000000"><strong>Total</strong></td>
	    		    <td style="text-align:center;border-top:1px solid #000000;border-bottom:1px solid #000000">'.$total_qty.'</td>	    		
	    		    <td style="text-align:right;border-top:1px solid #000000;border-bottom:1px solid #000000">&nbsp;</td>
	    		    <td style="text-align:right;border-top:1px solid #000000;border-bottom:1px solid #000000">'.Yii::app()->numberFormatter->formatCurrency($total,'IDR').'</td>
	    		   </tr>
	    		  </tfoot>
	    		  </table>' ;
	    
	    $pdf->writeHTML($html,true,false,false,false,'C');
	    
	    $pdf->Cell ( 130, 10, "Diterima Oleh", 0, 0, 'L' );
	    $pdf->Cell ( 40, 10, "Hormat Kami", 0, 1, 'L' );

		
	    $pdf->Ln(8);
	    
	    $pdf->MultiCell ( 130, 10, "Barang/jasa telah diterima dengan baik\n".$model->kodePelanggan->nama, 0, 'L',false,0);
	    $pdf->Cell ( 40, 10, "", 'B', 1, 'L' );
	    
		
		$pdf->Output ( "loket_pelangi.pdf", "I" );
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new Transaksi ( 'search' );
		$model->unsetAttributes (); // clear any default values
		if (isset ( $_GET ['Transaksi'] ))
			$model->attributes = $_GET ['Transaksi'];
		
		$this->render ( 'admin', array (
				'model' => $model 
		) );
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * 
	 * @param
	 *        	integer the ID of the model to be loaded
	 */
	public function loadModel($id) {
		$model = Transaksi::model ()->findByPk ( $id );
		if ($model === null)
			throw new CHttpException ( 404, 'The requested page does not exist.' );
		return $model;
	}
	
	/**
	 * Performs the AJAX validation.
	 * 
	 * @param
	 *        	CModel the model to be validated
	 */
	protected function performAjaxValidation($model) {
		if (isset ( $_POST ['ajax'] ) && $_POST ['ajax'] === 'transaksi-form') {
			echo CActiveForm::validate ( $model );
			Yii::app ()->end ();
		}
	}
}
