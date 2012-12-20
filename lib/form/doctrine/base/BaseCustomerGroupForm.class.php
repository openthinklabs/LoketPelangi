<?php

/**
 * CustomerGroup form base class.
 *
 * @method CustomerGroup getObject() Returns the current form's model object
 *
 * @package    POSLoketPelangi
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCustomerGroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ckode_customer' => new sfWidgetFormInputHidden(),
      'group_id'       => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'ckode_customer' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ckode_customer')), 'empty_value' => $this->getObject()->get('ckode_customer'), 'required' => false)),
      'group_id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('group_id')), 'empty_value' => $this->getObject()->get('group_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('customer_group[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CustomerGroup';
  }

}
