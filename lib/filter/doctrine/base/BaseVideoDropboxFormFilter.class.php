<?php

/**
 * VideoDropbox filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVideoDropboxFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_video_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AssetVideo'), 'add_empty' => true)),
      'youtube_id'     => new sfWidgetFormFilterInput(),
      'action'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'folder'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'message'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'asset_video_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AssetVideo'), 'column' => 'id')),
      'youtube_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'action'         => new sfValidatorPass(array('required' => false)),
      'folder'         => new sfValidatorPass(array('required' => false)),
      'status'         => new sfValidatorPass(array('required' => false)),
      'message'        => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('video_dropbox_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VideoDropbox';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'asset_video_id' => 'ForeignKey',
      'youtube_id'     => 'Number',
      'action'         => 'Text',
      'folder'         => 'Text',
      'status'         => 'Text',
      'message'        => 'Text',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
