<?php

/**
 * TblCustomer filter form base class.
 *
 * @package    POSLoketPelangi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTblCustomerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ckode_sales'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TblSales'), 'add_empty' => true)),
      'ckode_loket'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TblLoket'), 'add_empty' => true)),
      'ckode_usaha'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TblBidangusaha'), 'add_empty' => true)),
      'ckode_pos'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TblWilayah'), 'add_empty' => true)),
      'lokasi_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EdupediaLocation'), 'add_empty' => true)),
      'cnama'                    => new sfWidgetFormFilterInput(),
      'cnama_singkat'            => new sfWidgetFormFilterInput(),
      'calamat'                  => new sfWidgetFormFilterInput(),
      'calamat_tagih'            => new sfWidgetFormFilterInput(),
      'dtgl_masuk'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'cattn'                    => new sfWidgetFormFilterInput(),
      'ctelepon'                 => new sfWidgetFormFilterInput(),
      'cnpwp'                    => new sfWidgetFormFilterInput(),
      'nterm'                    => new sfWidgetFormFilterInput(),
      'cstatus'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TblStatuscust'), 'add_empty' => true)),
      'takakura_pinjaman'        => new sfWidgetFormFilterInput(),
      'takakura_uang_jaminan'    => new sfWidgetFormFilterInput(),
      'tong_sampah_pinjaman'     => new sfWidgetFormFilterInput(),
      'tong_sampah_uang_jaminan' => new sfWidgetFormFilterInput(),
      'ctelepon2'                => new sfWidgetFormFilterInput(),
      'ctransfer'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ccetak_harga'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cpayment'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TblJenisbayar'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'ckode_sales'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TblSales'), 'column' => 'ckode_sales')),
      'ckode_loket'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TblLoket'), 'column' => 'ckode_loket')),
      'ckode_usaha'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TblBidangusaha'), 'column' => 'ckode_usaha')),
      'ckode_pos'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TblWilayah'), 'column' => 'ckodepos')),
      'lokasi_id'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('EdupediaLocation'), 'column' => 'id')),
      'cnama'                    => new sfValidatorPass(array('required' => false)),
      'cnama_singkat'            => new sfValidatorPass(array('required' => false)),
      'calamat'                  => new sfValidatorPass(array('required' => false)),
      'calamat_tagih'            => new sfValidatorPass(array('required' => false)),
      'dtgl_masuk'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cattn'                    => new sfValidatorPass(array('required' => false)),
      'ctelepon'                 => new sfValidatorPass(array('required' => false)),
      'cnpwp'                    => new sfValidatorPass(array('required' => false)),
      'nterm'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cstatus'                  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TblStatuscust'), 'column' => 'ckode_statuscust')),
      'takakura_pinjaman'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'takakura_uang_jaminan'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tong_sampah_pinjaman'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tong_sampah_uang_jaminan' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ctelepon2'                => new sfValidatorPass(array('required' => false)),
      'ctransfer'                => new sfValidatorPass(array('required' => false)),
      'ccetak_harga'             => new sfValidatorPass(array('required' => false)),
      'cpayment'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TblJenisbayar'), 'column' => 'ckode_jenisbayar')),
    ));

    $this->widgetSchema->setNameFormat('tbl_customer_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblCustomer';
  }

  public function getFields()
  {
    return array(
      'ckode_customer'           => 'Text',
      'ckode_sales'              => 'ForeignKey',
      'ckode_loket'              => 'ForeignKey',
      'ckode_usaha'              => 'ForeignKey',
      'ckode_pos'                => 'ForeignKey',
      'lokasi_id'                => 'ForeignKey',
      'cnama'                    => 'Text',
      'cnama_singkat'            => 'Text',
      'calamat'                  => 'Text',
      'calamat_tagih'            => 'Text',
      'dtgl_masuk'               => 'Date',
      'cattn'                    => 'Text',
      'ctelepon'                 => 'Text',
      'cnpwp'                    => 'Text',
      'nterm'                    => 'Number',
      'cstatus'                  => 'ForeignKey',
      'takakura_pinjaman'        => 'Number',
      'takakura_uang_jaminan'    => 'Number',
      'tong_sampah_pinjaman'     => 'Number',
      'tong_sampah_uang_jaminan' => 'Number',
      'ctelepon2'                => 'Text',
      'ctransfer'                => 'Text',
      'ccetak_harga'             => 'Text',
      'cpayment'                 => 'ForeignKey',
    );
  }
}
