<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>
		array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Loket'=>array('index'),
				'Manage'),
));

$this->menu=array(
	array('label'=>'List Loket','url'=>array('index')),
	array('label'=>'Create Loket','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('loket-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Lokets</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'loket-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode_loket',
		'keterangan',
		'jalan',
		'telepon',
		'telepon2',
		'fax',
		/*
		'email',
		'kontak',
		'inactive',
		'negara_id',
		'propinsi_id',
		'kabkota_id',
		'kecamatan_id',
		'kelurahan_id',
		'rw_id',
		'rt_id',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
