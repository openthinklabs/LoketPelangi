<?php
$this->breadcrumbs=array(
	'Bidang Usahas'=>array('index'),
	$model->kode_usaha=>array('view','id'=>$model->kode_usaha),
	'Update',
);

$this->menu=array(
	array('label'=>'List BidangUsaha','url'=>array('index')),
	array('label'=>'Create BidangUsaha','url'=>array('create')),
	array('label'=>'View BidangUsaha','url'=>array('view','id'=>$model->kode_usaha)),
	array('label'=>'Manage BidangUsaha','url'=>array('admin')),
);
?>

<h1>Update BidangUsaha <?php echo $model->kode_usaha; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>