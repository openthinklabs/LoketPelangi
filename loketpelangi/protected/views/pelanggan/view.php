<?php
$this->breadcrumbs=array(
	'Pelanggans'=>array('index'),
	$model->kode_pelanggan,
);

$this->menu=array(
	array('label'=>'List Pelanggan','url'=>array('index')),
	array('label'=>'Create Pelanggan','url'=>array('create')),
	array('label'=>'Update Pelanggan','url'=>array('update','id'=>$model->kode_pelanggan)),
	array('label'=>'Delete Pelanggan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_pelanggan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pelanggan','url'=>array('admin')),
);
?>

<h1>View Pelanggan #<?php echo $model->kode_pelanggan; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'kode_pelanggan',
		'kode_salesman',
		'kode_loket',
		'kode_usaha',
		'kode_pos',
		'lokasi_id',
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
	),
)); ?>
