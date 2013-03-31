<?php 
if(count(Lokasi::model()->findByPk($rw_id)->children()->findAll()) > 0) {
$this->widget('bootstrap.widgets.TbSelect2', array(
		'asDropDownList' => true,
		'name' => 'rt_id',
		'data'=>CHtml::listData(Lokasi::model()->findByPk($rw_id)->children()->findAll(), 'id', 'nama'),
		'options'=>array(
				'placeholder' => 'Pilih RT',
		),
		'htmlOptions'=>array(
				'prompt'=>'',
		)
));
} else { 
?>
<span class="alert alert-error">Tidak ada data RT</span>
<?php } ?>