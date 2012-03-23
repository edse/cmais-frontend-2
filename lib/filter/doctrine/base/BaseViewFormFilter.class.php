<?php

/**
 * View filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseViewFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset'      => new sfWidgetFormFilterInput(),
      'section'    => new sfWidgetFormFilterInput(),
      'ip'         => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'asset'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'section'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ip'         => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('view_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'View';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'asset'      => 'Number',
      'section'    => 'Number',
      'ip'         => 'Text',
      'created_at' => 'Date',
    );
  }
}
