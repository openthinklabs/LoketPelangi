<?php

/**
 * TblBidangusaha form base class.
 *
 * @method TblBidangusaha getObject() Returns the current form's model object
 *
 * @package    POSLoketPelangi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTblBidangusahaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ckode_usaha' => new sfWidgetFormInputHidden(),
      'cketerangan' => new sfWidgetFormInputText(),
      'cdetail'     => new sfWidgetFormInputText(),
      'ctransfer'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ckode_usaha' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ckode_usaha')), 'empty_value' => $this->getObject()->get('ckode_usaha'), 'required' => false)),
      'cketerangan' => new sfValidatorString(array('max_length' => 50)),
      'cdetail'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'ctransfer'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_bidangusaha[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblBidangusaha';
  }

}
