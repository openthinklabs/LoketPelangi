<?php

/**
 * TblJenisbayar form base class.
 *
 * @method TblJenisbayar getObject() Returns the current form's model object
 *
 * @package    POSLoketPelangi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTblJenisbayarForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ckode_jenisbayar' => new sfWidgetFormInputHidden(),
      'cketerangan'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ckode_jenisbayar' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ckode_jenisbayar')), 'empty_value' => $this->getObject()->get('ckode_jenisbayar'), 'required' => false)),
      'cketerangan'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_jenisbayar[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblJenisbayar';
  }

}
