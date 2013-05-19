<table class="table table-striped table-condensed" id="tabel_transaksi_detail">
	<thead>
	  <tr>
	    <th>Produk</th>
	    <th>Qty</th>
	    <th>Harga</th>
	    <th>Total</th>
	    <th>Aksi</th>
	  </tr>
	</thead>
	<tbody>
	</tbody>
	<tfoot>
	  <tr>
	    <th>Total</th>
	    <th><span class="uneditable-input" style="text-align:right" id="total_qty"></span></th>
	    <th>&nbsp;</th>
	    <th><span class="uneditable-input" style="text-align:right" id="total_sum"></span></th>
	    <th>&nbsp;</th>
	  </tr>
	  <tr>
	    <td>
	    <?php 
	    $produk_models = Produk::model()->findAll();
	    $this->widget('bootstrap.widgets.TbSelect2', array(
	    		'asDropDownList' => true,
	    		'name' => 'kode_produk',
	    		'model'=>$produk_models,
	    		'data'=>CHtml::listData($produk_models,'kode_produk','nama'),
	    		'options' => array(
	    				'placeholder' => 'Pilih Produk',
	    				'width' => '100%',
	    		)));	    
	    ?>
	    </td>
	    <td>
	    <?php echo CHtml::textField('qty','1',array('style'=>'text-align:right'));?>
	    </td>
	    <td>
	      <?php echo CHtml::textField('harga','0',array('style'=>'text-align:right'));?>
	    </td>
	    <td>
	      <?php echo CHtml::textField('total','0',array('readonly'=>true,'style'=>'text-align:right'));?>
	    </td>	    
	    <td>
	     <?php 
	     $this->widget('bootstrap.widgets.TbButton',array(
	     		'label' => '',
	     		'icon' => 'icon-plus',
                'htmlOptions'=>array('name' =>'tambah_detail_transaksi')
	     ));	     
	     ?>
	    </td>
	  </tr>
	</tfoot>
</table>