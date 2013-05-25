<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>
		array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Pengguna'=>array('index'),
				'Tambah'),
));

$this->menu=array(
	array('label'=>'List Users','url'=>array('index')),
	array('label'=>'Manage Users','url'=>array('admin')),
);
?>

<fieldset> 
  <legend>Tambah User Baru</legend>
  <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</fieldset>