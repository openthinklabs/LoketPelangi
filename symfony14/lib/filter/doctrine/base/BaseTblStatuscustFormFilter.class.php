<?php

/**
 * TblStatuscust filter form base class.
 *
 * @package    POSLoketPelangi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTblStatuscustFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cketerangan'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'cketerangan'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_statuscust_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblStatuscust';
  }

  public function getFields()
  {
    return array(
      'ckode_statuscust' => 'Text',
      'cketerangan'      => 'Text',
    );
  }
}
