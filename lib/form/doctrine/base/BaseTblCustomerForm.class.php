<?php

/**
 * TblCustomer form base class.
 *
 * @method TblCustomer getObject() Returns the current form's model object
 *
 * @package    POSLoketPelangi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTblCustomerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ckode_customer'           => new sfWidgetFormInputHidden(),
      'ckode_sales'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TblSales'), 'add_empty' => false)),
      'ckode_loket'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TblLoket'), 'add_empty' => false)),
      'ckode_usaha'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TblBidangusaha'), 'add_empty' => false)),
      'ckode_pos'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TblWilayah'), 'add_empty' => false)),
      'lokasi_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EdupediaLocation'), 'add_empty' => false)),
      'cnama'                    => new sfWidgetFormInputText(),
      'cnama_singkat'            => new sfWidgetFormInputText(),
      'calamat'                  => new sfWidgetFormInputText(),
      'calamat_tagih'            => new sfWidgetFormInputText(),
      'dtgl_masuk'               => new sfWidgetFormDateTime(),
      'cattn'                    => new sfWidgetFormInputText(),
      'ctelepon'                 => new sfWidgetFormInputText(),
      'cnpwp'                    => new sfWidgetFormInputText(),
      'nterm'                    => new sfWidgetFormInputText(),
      'cstatus'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TblStatuscust'), 'add_empty' => false)),
      'takakura_pinjaman'        => new sfWidgetFormInputText(),
      'takakura_uang_jaminan'    => new sfWidgetFormInputText(),
      'tong_sampah_pinjaman'     => new sfWidgetFormInputText(),
      'tong_sampah_uang_jaminan' => new sfWidgetFormInputText(),
      'ctelepon2'                => new sfWidgetFormInputText(),
      'ctransfer'                => new sfWidgetFormInputText(),
      'ccetak_harga'             => new sfWidgetFormInputText(),
      'cpayment'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TblJenisbayar'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'ckode_customer'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ckode_customer')), 'empty_value' => $this->getObject()->get('ckode_customer'), 'required' => false)),
      'ckode_sales'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TblSales'))),
      'ckode_loket'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TblLoket'))),
      'ckode_usaha'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TblBidangusaha'))),
      'ckode_pos'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TblWilayah'))),
      'lokasi_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EdupediaLocation'))),
      'cnama'                    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'cnama_singkat'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'calamat'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'calamat_tagih'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'dtgl_masuk'               => new sfValidatorDateTime(array('required' => false)),
      'cattn'                    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'ctelepon'                 => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'cnpwp'                    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'nterm'                    => new sfValidatorInteger(array('required' => false)),
      'cstatus'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TblStatuscust'), 'required' => false)),
      'takakura_pinjaman'        => new sfValidatorInteger(array('required' => false)),
      'takakura_uang_jaminan'    => new sfValidatorNumber(array('required' => false)),
      'tong_sampah_pinjaman'     => new sfValidatorInteger(array('required' => false)),
      'tong_sampah_uang_jaminan' => new sfValidatorNumber(array('required' => false)),
      'ctelepon2'                => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'ctransfer'                => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'ccetak_harga'             => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cpayment'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TblJenisbayar'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_customer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblCustomer';
  }

}
