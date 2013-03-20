<?php

/**
 * TblLoket form base class.
 *
 * @method TblLoket getObject() Returns the current form's model object
 *
 * @package    POSLoketPelangi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTblLoketForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ckode_loket'      => new sfWidgetFormInputHidden(),
      'cketerangan'      => new sfWidgetFormInputText(),
      'delivery_address' => new sfWidgetFormInputText(),
      'phone'            => new sfWidgetFormInputText(),
      'phone2'           => new sfWidgetFormInputText(),
      'fax'              => new sfWidgetFormInputText(),
      'email'            => new sfWidgetFormInputText(),
      'contact'          => new sfWidgetFormInputText(),
      'inactive'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ckode_loket'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ckode_loket')), 'empty_value' => $this->getObject()->get('ckode_loket'), 'required' => false)),
      'cketerangan'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'delivery_address' => new sfValidatorString(array('max_length' => 255)),
      'phone'            => new sfValidatorString(array('max_length' => 30)),
      'phone2'           => new sfValidatorString(array('max_length' => 30)),
      'fax'              => new sfValidatorString(array('max_length' => 30)),
      'email'            => new sfValidatorString(array('max_length' => 100)),
      'contact'          => new sfValidatorString(array('max_length' => 10)),
      'inactive'         => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('tbl_loket[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblLoket';
  }

}
