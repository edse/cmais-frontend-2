<?php

/**
 * Schedule filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseScheduleFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'channel_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Channel'), 'add_empty' => true)),
      'program_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Program'), 'add_empty' => true)),
      'type'              => new sfWidgetFormFilterInput(),
      'title'             => new sfWidgetFormFilterInput(),
      'description'       => new sfWidgetFormFilterInput(),
      'description_short' => new sfWidgetFormFilterInput(),
      'image'             => new sfWidgetFormFilterInput(),
      'image_source'      => new sfWidgetFormFilterInput(),
      'date_start'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'date_end'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'is_active'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_important'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_live'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'url'               => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'channel_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Channel'), 'column' => 'id')),
      'program_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Program'), 'column' => 'id')),
      'type'              => new sfValidatorPass(array('required' => false)),
      'title'             => new sfValidatorPass(array('required' => false)),
      'description'       => new sfValidatorPass(array('required' => false)),
      'description_short' => new sfValidatorPass(array('required' => false)),
      'image'             => new sfValidatorPass(array('required' => false)),
      'image_source'      => new sfValidatorPass(array('required' => false)),
      'date_start'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'date_end'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'is_active'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_important'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_live'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'url'               => new sfValidatorPass(array('required' => false)),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('schedule_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Schedule';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'channel_id'        => 'ForeignKey',
      'program_id'        => 'ForeignKey',
      'type'              => 'Text',
      'title'             => 'Text',
      'description'       => 'Text',
      'description_short' => 'Text',
      'image'             => 'Text',
      'image_source'      => 'Text',
      'date_start'        => 'Date',
      'date_end'          => 'Date',
      'is_active'         => 'Boolean',
      'is_important'      => 'Boolean',
      'is_live'           => 'Boolean',
      'url'               => 'Text',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
