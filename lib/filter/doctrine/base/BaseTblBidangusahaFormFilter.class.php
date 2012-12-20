<?php

/**
 * TblBidangusaha filter form base class.
 *
 * @package    POSLoketPelangi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTblBidangusahaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cketerangan' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cdetail'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ctransfer'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'cketerangan' => new sfValidatorPass(array('required' => false)),
      'cdetail'     => new sfValidatorPass(array('required' => false)),
      'ctransfer'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_bidangusaha_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblBidangusaha';
  }

  public function getFields()
  {
    return array(
      'ckode_usaha' => 'Text',
      'cketerangan' => 'Text',
      'cdetail'     => 'Text',
      'ctransfer'   => 'Text',
    );
  }
}
