<?php

/**
 * AssetAudio filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAssetAudioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'file'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'original_file'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'genre'              => new sfWidgetFormFilterInput(),
      'source'             => new sfWidgetFormFilterInput(),
      'author'             => new sfWidgetFormFilterInput(),
      'interpret'          => new sfWidgetFormFilterInput(),
      'composer'           => new sfWidgetFormFilterInput(),
      'year'               => new sfWidgetFormFilterInput(),
      'label'              => new sfWidgetFormFilterInput(),
      'extension'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'original_file_size' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'duration'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'asset_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Asset'), 'column' => 'id')),
      'file'               => new sfValidatorPass(array('required' => false)),
      'original_file'      => new sfValidatorPass(array('required' => false)),
      'genre'              => new sfValidatorPass(array('required' => false)),
      'source'             => new sfValidatorPass(array('required' => false)),
      'author'             => new sfValidatorPass(array('required' => false)),
      'interpret'          => new sfValidatorPass(array('required' => false)),
      'composer'           => new sfValidatorPass(array('required' => false)),
      'year'               => new sfValidatorPass(array('required' => false)),
      'label'              => new sfValidatorPass(array('required' => false)),
      'extension'          => new sfValidatorPass(array('required' => false)),
      'original_file_size' => new sfValidatorPass(array('required' => false)),
      'duration'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_audio_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetAudio';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'asset_id'           => 'ForeignKey',
      'file'               => 'Text',
      'original_file'      => 'Text',
      'genre'              => 'Text',
      'source'             => 'Text',
      'author'             => 'Text',
      'interpret'          => 'Text',
      'composer'           => 'Text',
      'year'               => 'Text',
      'label'              => 'Text',
      'extension'          => 'Text',
      'original_file_size' => 'Text',
      'duration'           => 'Text',
    );
  }
}
