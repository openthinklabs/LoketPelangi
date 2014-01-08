<table class="table  table-striped table-condensed">
  <tbody>
    <tr>
      <td style="width:15%"><?php echo CHtml::encode($data->getAttributeLabel('kode_produk')); ?></td>
      <td style="width:5px">:</td>
      <td><?php echo CHtml::link(CHtml::encode($data->kode_produk),array('view','id'=>$data->kode_produk)); ?></td>
      <td style="width:15%"><?php echo CHtml::encode($data->getAttributeLabel('kode_divisi')); ?></td>
      <td style="width:5px">:</td>
      <td><?php echo CHtml::encode($data->kodeDivisi?$data->kodeDivisi->keterangan:"-"); ?></td>      
    </tr>
    <tr>
      <td style="width:15%"><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?></td>
      <td style="width:5px">:</td>
      <td colspan="4"><?php echo CHtml::encode($data->nama); ?></td>
    </tr>    
    <tr>
      <td style="width:15%"><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?></td>
      <td style="width:5px">:</td>
      <td colspan="4"><?php echo CHtml::encode($data->keterangan); ?></td>
    </tr>        
  </tbody>
</table>
<hr/>