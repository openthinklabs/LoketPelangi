<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Transaksi'=>array('index'),
				'Transaksi Baru'),
));


$this->menu=array(
	array('label'=>'List Transaksi','url'=>array('index')),
	array('label'=>'Manage Transaksi','url'=>array('admin')),
);
?>

<h1>Transaksi Baru</h1>

<div class="row-fluid">
  <div class="span12">
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
  </div>
</div>