<?php

/**
 * AssetVideo filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAssetVideoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'youtube_id'         => new sfWidgetFormFilterInput(),
      'youtube_thumb'      => new sfWidgetFormFilterInput(),
      'file'               => new sfWidgetFormFilterInput(),
      'original_file'      => new sfWidgetFormFilterInput(),
      'headline'           => new sfWidgetFormFilterInput(),
      'genre'              => new sfWidgetFormFilterInput(),
      'source'             => new sfWidgetFormFilterInput(),
      'author'             => new sfWidgetFormFilterInput(),
      'width'              => new sfWidgetFormFilterInput(),
      'height'             => new sfWidgetFormFilterInput(),
      'extension'          => new sfWidgetFormFilterInput(),
      'original_file_size' => new sfWidgetFormFilterInput(),
      'frame_rate'         => new sfWidgetFormFilterInput(),
      'bitrate'            => new sfWidgetFormFilterInput(),
      'duration'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'asset_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Asset'), 'column' => 'id')),
      'youtube_id'         => new sfValidatorPass(array('required' => false)),
      'youtube_thumb'      => new sfValidatorPass(array('required' => false)),
      'file'               => new sfValidatorPass(array('required' => false)),
      'original_file'      => new sfValidatorPass(array('required' => false)),
      'headline'           => new sfValidatorPass(array('required' => false)),
      'genre'              => new sfValidatorPass(array('required' => false)),
      'source'             => new sfValidatorPass(array('required' => false)),
      'author'             => new sfValidatorPass(array('required' => false)),
      'width'              => new sfValidatorPass(array('required' => false)),
      'height'             => new sfValidatorPass(array('required' => false)),
      'extension'          => new sfValidatorPass(array('required' => false)),
      'original_file_size' => new sfValidatorPass(array('required' => false)),
      'frame_rate'         => new sfValidatorPass(array('required' => false)),
      'bitrate'            => new sfValidatorPass(array('required' => false)),
      'duration'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_video_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetVideo';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'asset_id'           => 'ForeignKey',
      'youtube_id'         => 'Text',
      'youtube_thumb'      => 'Text',
      'file'               => 'Text',
      'original_file'      => 'Text',
      'headline'           => 'Text',
      'genre'              => 'Text',
      'source'             => 'Text',
      'author'             => 'Text',
      'width'              => 'Text',
      'height'             => 'Text',
      'extension'          => 'Text',
      'original_file_size' => 'Text',
      'frame_rate'         => 'Text',
      'bitrate'            => 'Text',
      'duration'           => 'Text',
    );
  }
}
