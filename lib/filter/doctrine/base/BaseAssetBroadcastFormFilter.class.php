<?php

/**
 * AssetBroadcast filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAssetBroadcastFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'number'               => new sfWidgetFormFilterInput(),
      'headline'             => new sfWidgetFormFilterInput(),
      'headline_long'        => new sfWidgetFormFilterInput(),
      'date_recording_start' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'date_recording_end'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'date_exibition_start' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'date_exibition_end'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'cam1'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cam2'                 => new sfWidgetFormFilterInput(),
      'cam3'                 => new sfWidgetFormFilterInput(),
      'cam4'                 => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'asset_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Asset'), 'column' => 'id')),
      'number'               => new sfValidatorPass(array('required' => false)),
      'headline'             => new sfValidatorPass(array('required' => false)),
      'headline_long'        => new sfValidatorPass(array('required' => false)),
      'date_recording_start' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'date_recording_end'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'date_exibition_start' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'date_exibition_end'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cam1'                 => new sfValidatorPass(array('required' => false)),
      'cam2'                 => new sfValidatorPass(array('required' => false)),
      'cam3'                 => new sfValidatorPass(array('required' => false)),
      'cam4'                 => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_broadcast_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetBroadcast';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'asset_id'             => 'ForeignKey',
      'number'               => 'Text',
      'headline'             => 'Text',
      'headline_long'        => 'Text',
      'date_recording_start' => 'Date',
      'date_recording_end'   => 'Date',
      'date_exibition_start' => 'Date',
      'date_exibition_end'   => 'Date',
      'cam1'                 => 'Text',
      'cam2'                 => 'Text',
      'cam3'                 => 'Text',
      'cam4'                 => 'Text',
    );
  }
}
