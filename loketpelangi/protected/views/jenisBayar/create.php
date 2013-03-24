<?php
$this->breadcrumbs=array(
	'Jenis Bayars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JenisBayar','url'=>array('index')),
	array('label'=>'Manage JenisBayar','url'=>array('admin')),
);
?>

<h1>Create JenisBayar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>