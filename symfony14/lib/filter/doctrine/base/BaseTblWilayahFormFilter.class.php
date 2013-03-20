<?php

/**
 * TblWilayah filter form base class.
 *
 * @package    POSLoketPelangi
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTblWilayahFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cketerangan' => new sfWidgetFormFilterInput(),
      'latitude'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'longitude'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ctransfer'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'cketerangan' => new sfValidatorPass(array('required' => false)),
      'latitude'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'longitude'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ctransfer'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_wilayah_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblWilayah';
  }

  public function getFields()
  {
    return array(
      'ckodepos'    => 'Text',
      'cketerangan' => 'Text',
      'latitude'    => 'Number',
      'longitude'   => 'Number',
      'ctransfer'   => 'Text',
    );
  }
}
