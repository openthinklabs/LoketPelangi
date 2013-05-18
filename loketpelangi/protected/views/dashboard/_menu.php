<div class="row-fluid">
  <div class="span3">
  <?php 
	  $this->widget('bootstrap.widgets.TbButton',array(
	  		'label' => 'Pelanggan ('. Pelanggan::model()->count().')',
	  		'size' => 'large',
	  		'url'=>Yii::app()->createUrL('pelanggan/index')
	  ));  
  ?>  
  </div>
  <div class="span3">
  <?php 
	  $this->widget('bootstrap.widgets.TbButton',array(
	  		'label' => 'Produk ('. Produk::model()->count().')',
	  		'size' => 'large',
            'url'=>Yii::app()->createUrL('produk/index')
	  ));  
  ?>  
  </div>
  <div class="span3">
  <?php 
	  $this->widget('bootstrap.widgets.TbButton',array(
	  		'label' => 'Transaksi ('. Transaksi::model()->count().'/'.TransaksiDetail::model()->count().')',
	  		'size' => 'large',
            'url'=>Yii::app()->createUrL('transaksi/index')
	  ));  
  ?>  
  </div>
</div>
<hr>
<div class="row-fluid">
  <div class="span3">
  <?php 
	  $this->widget('bootstrap.widgets.TbButton',array(
	  		'label' => 'Laporan',
	  		'size' => 'large'
	  ));  
  ?>    
  </div>
</div>
<hr>

<fieldset>
  <legend>Data Referensi</legend>
<div class="row-fluid">
  <div class="span3">
  <?php 
	  $this->widget('bootstrap.widgets.TbButton',array(
	  		'label' => 'Loket ('. Loket::model()->count().')',
	  		'size' => 'large',
            'url'=>Yii::app()->createUrL('loket/index')
	  ));  
  ?>    
  </div>
  <div class="span3">
  <?php 
	  $this->widget('bootstrap.widgets.TbButton',array(
	  		'label' => 'Bidang usaha ('. BidangUsaha::model()->count().')',
	  		'size' => 'large',
            'url'=>Yii::app()->createUrL('bidangUsaha/index')
	  ));  
  ?>    
  </div>  
  <div class="span3">
  <?php 
	  $this->widget('bootstrap.widgets.TbButton',array(
	  		'label' => 'Salesman ('. Salesman::model()->count().')',
	  		'size' => 'large',
            'url'=>Yii::app()->createUrL('salesman/index')
	  ));  
  ?>    
  </div>    
  <div class="span3">
  <?php 
	  $this->widget('bootstrap.widgets.TbButton',array(
	  		'label' => 'Kode Pos ('. Wilayah::model()->count().')',
	  		'size' => 'large',
            'url'=>Yii::app()->createUrL('kodepos/index')
	  ));  
  ?>    
  </div>      
</div>
<br>
<div class="row-fluid">
  <div class="span3">
  <?php 
	  $this->widget('bootstrap.widgets.TbButton',array(
	  		'label' => 'Status Pelanggan ('. StatusPelanggan::model()->count().')',
	  		'size' => 'large',
            'url'=>Yii::app()->createUrL('statusPelanggan/index')
	  ));  
  ?>    
  </div>      
</div>
</fieldset>