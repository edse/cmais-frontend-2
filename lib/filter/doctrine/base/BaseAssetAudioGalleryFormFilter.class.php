<?php

/**
 * AssetAudioGallery filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAssetAudioGalleryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'headline' => new sfWidgetFormFilterInput(),
      'source'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'asset_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Asset'), 'column' => 'id')),
      'headline' => new sfValidatorPass(array('required' => false)),
      'source'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_audio_gallery_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetAudioGallery';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'asset_id' => 'ForeignKey',
      'headline' => 'Text',
      'source'   => 'Text',
    );
  }
}
