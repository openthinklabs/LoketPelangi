<?php

/**
 * TblStatuscust form base class.
 *
 * @method TblStatuscust getObject() Returns the current form's model object
 *
 * @package    POSLoketPelangi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTblStatuscustForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ckode_statuscust' => new sfWidgetFormInputHidden(),
      'cketerangan'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ckode_statuscust' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ckode_statuscust')), 'empty_value' => $this->getObject()->get('ckode_statuscust'), 'required' => false)),
      'cketerangan'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_statuscust[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblStatuscust';
  }

}
