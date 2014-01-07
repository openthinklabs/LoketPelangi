<table class="table table-bordered table-striped table-condensed">
  <tbody>
    <tr>
      <td style="width:15%"><?php echo CHtml::encode($data->getAttributeLabel('kode_produk')); ?></td>
      <td style="width:5px">:</td>
      <td><?php echo CHtml::link(CHtml::encode($data->kode_produk),array('view','id'=>$data->kode_produk)); ?></td>
    </tr>
    <tr>
      <td style="width:15%"><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?></td>
      <td style="width:5px">:</td>
      <td><?php echo CHtml::encode($data->nama); ?></td>
    </tr>    
    <tr>
      <td style="width:15%"><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?></td>
      <td style="width:5px">:</td>
      <td><?php echo CHtml::encode($data->keterangan); ?></td>
    </tr>        
  </tbody>
</table>
<hr/>