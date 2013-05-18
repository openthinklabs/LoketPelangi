<?php 
if(count(Lokasi::model()->findByPk($propinsi_id)->children()->findAll()) > 0) {
$this->widget('bootstrap.widgets.TbSelect2', array(
		'asDropDownList' => true,
		'name' => 'kabkota_id',
		'data'=>CHtml::listData(Lokasi::model()->findByPk($propinsi_id)->children()->findAll(), 'id', 'nama'),
		'options'=>array(
				'placeholder' => 'Pilih Kabupaten/Kota',
		),
		'htmlOptions'=>array(
				'prompt'=>'',
				'options'=>array($kabkota_id=>array('selected'=>true))
		)
));
} else { 
?>
<span class="alert alert-error">Tidak ada data Kabupaten/Kota</span>
<?php } ?>
