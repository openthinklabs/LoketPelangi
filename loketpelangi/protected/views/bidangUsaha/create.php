<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>
		array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Bidang Usaha'=>array('index'),
				'Tambah'),
));

$this->menu=array(
	array('label'=>'List BidangUsaha','url'=>array('index')),
	array('label'=>'Manage BidangUsaha','url'=>array('admin')),
);
?>

<h1>Create BidangUsaha</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>