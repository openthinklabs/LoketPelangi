<table class="table table-bordered table-striped table-condensed">
  <tbody>
    <tr>
      <td style="width:15%"><?php echo CHtml::encode($data->getAttributeLabel('kode_divisi')); ?></td>
      <td style="width:5px">:</td>
      <td><?php echo CHtml::link(CHtml::encode($data->kode_divisi),array('view','id'=>$data->kode_divisi)); ?></td>
    </tr>
    <tr>
      <td style="width:15%"><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?></td>
      <td style="width:5px">:</td>
      <td><?php echo CHtml::encode($data->keterangan); ?></td>
    </tr>    
    <tr>
      <td style="width:15%"><?php echo CHtml::encode($data->getAttributeLabel('detail')); ?></td>
      <td style="width:5px">:</td>
      <td><?php echo CHtml::encode($data->detail); ?></td>
    </tr>        
  </tbody>
</table>
<hr/>