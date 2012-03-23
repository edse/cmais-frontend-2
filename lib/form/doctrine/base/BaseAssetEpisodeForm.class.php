<?php

/**
 * AssetEpisode form base class.
 *
 * @method AssetEpisode getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssetEpisodeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'asset_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => false)),
      'asset_season_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AssetSeason'), 'add_empty' => true)),
      'headline'         => new sfWidgetFormInputText(),
      'long_description' => new sfWidgetFormInputText(),
      'transcription'    => new sfWidgetFormTextarea(),
      'number'           => new sfWidgetFormInputText(),
      'director'         => new sfWidgetFormInputText(),
      'actor'            => new sfWidgetFormInputText(),
      'producer'         => new sfWidgetFormInputText(),
      'writter'          => new sfWidgetFormInputText(),
      'date_release'     => new sfWidgetFormDate(),
      'url'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asset_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'))),
      'asset_season_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AssetSeason'), 'required' => false)),
      'headline'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'long_description' => new sfValidatorPass(array('required' => false)),
      'transcription'    => new sfValidatorString(array('required' => false)),
      'number'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'director'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'actor'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'producer'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'writter'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date_release'     => new sfValidatorDate(array('required' => false)),
      'url'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_episode[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetEpisode';
  }

}
