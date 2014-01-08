<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Divisi'),
));

$this->menu=array(
	array('label'=>'Tambah Divisi','url'=>array('create')),
	array('label'=>'Manage Divisi','url'=>array('admin')),
);
?>

<div class="page-header">
  <h1>Divisi</h1>
</div>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
