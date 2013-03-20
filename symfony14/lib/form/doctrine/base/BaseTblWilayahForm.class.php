<?php

/**
 * TblWilayah form base class.
 *
 * @method TblWilayah getObject() Returns the current form's model object
 *
 * @package    POSLoketPelangi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTblWilayahForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ckodepos'    => new sfWidgetFormInputHidden(),
      'cketerangan' => new sfWidgetFormTextarea(),
      'latitude'    => new sfWidgetFormInputText(),
      'longitude'   => new sfWidgetFormInputText(),
      'ctransfer'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ckodepos'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ckodepos')), 'empty_value' => $this->getObject()->get('ckodepos'), 'required' => false)),
      'cketerangan' => new sfValidatorString(array('required' => false)),
      'latitude'    => new sfValidatorNumber(),
      'longitude'   => new sfValidatorNumber(),
      'ctransfer'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_wilayah[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblWilayah';
  }

}
