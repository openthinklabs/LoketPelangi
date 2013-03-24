<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>
		array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Pelanggan'=>array('index'),
				'Manage'),
));

$this->menu=array(
	array('label'=>'List Pelanggan','url'=>array('index')),
	array('label'=>'Create Pelanggan','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('pelanggan-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pelanggan</h1>

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
	'id'=>'pelanggan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode_pelanggan',
		'kode_salesman',
		'kode_loket',
		'kode_usaha',
		'kode_pos',
		'lokasi_id',
		/*
		'nama',
		'nama_singkat',
		'alamat',
		'alamat_tagih',
		'dtgl_masuk',
		'attn',
		'telepon',
		'npwp',
		'term',
		'status',
		'takakura_pinjaman',
		'takakura_uang_jaminan',
		'tong_sampah_pinjaman',
		'tong_sampah_uang_jaminan',
		'telepon2',
		'transfer',
		'cetak_harga',
		'pembayaran',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
