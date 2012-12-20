<?php

/**
 * TblLoket filter form base class.
 *
 * @package    POSLoketPelangi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTblLoketFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cketerangan'      => new sfWidgetFormFilterInput(),
      'delivery_address' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'phone'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'phone2'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fax'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contact'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'inactive'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'cketerangan'      => new sfValidatorPass(array('required' => false)),
      'delivery_address' => new sfValidatorPass(array('required' => false)),
      'phone'            => new sfValidatorPass(array('required' => false)),
      'phone2'           => new sfValidatorPass(array('required' => false)),
      'fax'              => new sfValidatorPass(array('required' => false)),
      'email'            => new sfValidatorPass(array('required' => false)),
      'contact'          => new sfValidatorPass(array('required' => false)),
      'inactive'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tbl_loket_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblLoket';
  }

  public function getFields()
  {
    return array(
      'ckode_loket'      => 'Text',
      'cketerangan'      => 'Text',
      'delivery_address' => 'Text',
      'phone'            => 'Text',
      'phone2'           => 'Text',
      'fax'              => 'Text',
      'email'            => 'Text',
      'contact'          => 'Text',
      'inactive'         => 'Number',
    );
  }
}
