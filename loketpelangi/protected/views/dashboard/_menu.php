<div class="row">
  <div class="span3">
  <?php 
	  $this->widget('bootstrap.widgets.TbButton',array(
	  		'label' => 'Pelanggan',
	  		'size' => 'large',
	  		'url'=>Yii::app()->createUrL('pelanggan/index')
	  ));  
  ?>  
  </div>
  <div class="span3">
  <?php 
	  $this->widget('bootstrap.widgets.TbButton',array(
	  		'label' => 'Produk',
	  		'size' => 'large'
	  ));  
  ?>    
  </div>
  <div class="span3">
  <?php 
	  $this->widget('bootstrap.widgets.TbButton',array(
	  		'label' => 'Transaksi',
	  		'size' => 'large'
	  ));  
  ?>    
  </div>
</div>
<hr>
<div class="row">
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
<div class="row">
  <div class="span3">
  <?php 
	  $this->widget('bootstrap.widgets.TbButton',array(
	  		'label' => 'Loket',
	  		'size' => 'large',
            'url'=>Yii::app()->createUrL('loket/index')
	  ));  
  ?>    
  </div>
</div>