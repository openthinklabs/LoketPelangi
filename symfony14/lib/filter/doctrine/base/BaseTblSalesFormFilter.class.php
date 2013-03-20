<?php

/**
 * TblSales filter form base class.
 *
 * @package    POSLoketPelangi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTblSalesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ckode_loket' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TblLoket'), 'add_empty' => true)),
      'cnama'       => new sfWidgetFormFilterInput(),
      'ctransfer'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'calamat'     => new sfWidgetFormFilterInput(),
      'cstatus'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'ckode_loket' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TblLoket'), 'column' => 'ckode_loket')),
      'cnama'       => new sfValidatorPass(array('required' => false)),
      'ctransfer'   => new sfValidatorPass(array('required' => false)),
      'calamat'     => new sfValidatorPass(array('required' => false)),
      'cstatus'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_sales_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblSales';
  }

  public function getFields()
  {
    return array(
      'ckode_sales' => 'Text',
      'ckode_loket' => 'ForeignKey',
      'cnama'       => 'Text',
      'ctransfer'   => 'Text',
      'calamat'     => 'Text',
      'cstatus'     => 'Text',
    );
  }
}
