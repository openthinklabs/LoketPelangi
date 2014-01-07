<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Transaksi'=>array('index')),
));

$this->menu=array(
	array('label'=>'Daftar Transaksi','url'=>array('index')),
	array('label'=>'Tambah Transaksi','url'=>array('create')),
	array('label'=>'Update Transaksi','url'=>array('update','id'=>$model->id)),
	array('label'=>'Hapus Transaksi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transaksi','url'=>array('admin')),
);
?>

<h1>Informasi Transaksi <small><?php echo $model->id; ?></small></h1>

<fieldset>
  <legend><?php echo $model->kodePelanggan->nama?>, <?php echo $model->tanggal ;?></legend>
	<table class="table table-bordered table-striped table-condensed">
	  <caption>Transaksi Detail</caption>
	  <thead>
	    <tr>
	      <th>Produk</th>
	      <th>Jumlah</th>
	      <th>Harga</th>
	      <th>Total</th> 
	    </tr>
	  </thead>
	  <tbody>
	    <?php foreach($model->transaksiDetails as $transaksiDetail){?>
	    <?php $line_total = $transaksiDetail->qty*$transaksiDetail->harga ;?> 
	    <tr>
	      <td><?php echo $transaksiDetail->kodeProduk->nama ;?></td>
	      <td style="text-align:center"><?php echo $transaksiDetail->qty ;?></td>
	      <td style="text-align:right"><?php echo $transaksiDetail->harga ?></td>
	      <td style="text-align:right"><?php echo $line_total ;?></td>
	    </tr> 
	    <?php } ?>
	  </tbody>
	</table>
	
	<div class="form-actions">
	  <div class="pull-right">
	    <div class="pull-right">
	      <button type="button" name="cetak_faktur" id="cetak_faktur" class="btn"><i class="icon-print"></i> Cetak Faktur</button>
	    </div>
	  </div>
	</div>
</fieldset>

<script type="text/javascript">
 jQuery(function() {
	 $("#cetak_faktur").unbind("click").bind("click", function(){
		 window.open('<?php echo Yii::app()->createUrl('Transaksi/cetakFaktur');?>','_blank','height=500,width=1200,toolbar=no,location=no');
	 });	 
 }) ;
</script>