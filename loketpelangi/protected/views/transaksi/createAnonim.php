<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Transaksi'=>array('index'),
				'Transaksi Baru'),
));


$this->menu=array(
	array('label'=>'Tambah Transaksi','url'=>array('create')),
	array('label'=>'Tambah Transaksi Anonim','url'=>array('createAnonim')),
	array('label'=>'Manajemen Transaksi','url'=>array('admin')),
);
?>

<h1>Transaksi Anonim Baru</h1>

<div class="row-fluid">
  <div class="span12">
    <?php echo $this->renderPartial('_form_anonim', array('model'=>$model,'pelanggan'=>$pelanggan)); ?>
  </div>
</div>