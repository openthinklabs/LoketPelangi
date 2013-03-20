<?php

/**
 * TblSales form base class.
 *
 * @method TblSales getObject() Returns the current form's model object
 *
 * @package    POSLoketPelangi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTblSalesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ckode_sales' => new sfWidgetFormInputHidden(),
      'ckode_loket' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TblLoket'), 'add_empty' => false)),
      'cnama'       => new sfWidgetFormInputText(),
      'ctransfer'   => new sfWidgetFormInputText(),
      'calamat'     => new sfWidgetFormInputText(),
      'cstatus'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ckode_sales' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ckode_sales')), 'empty_value' => $this->getObject()->get('ckode_sales'), 'required' => false)),
      'ckode_loket' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TblLoket'))),
      'cnama'       => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'ctransfer'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'calamat'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'cstatus'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_sales[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblSales';
  }

}
