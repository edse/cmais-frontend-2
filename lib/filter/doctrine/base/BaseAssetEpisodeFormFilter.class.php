<?php

/**
 * AssetEpisode filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAssetEpisodeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'asset_season_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AssetSeason'), 'add_empty' => true)),
      'headline'         => new sfWidgetFormFilterInput(),
      'long_description' => new sfWidgetFormFilterInput(),
      'transcription'    => new sfWidgetFormFilterInput(),
      'number'           => new sfWidgetFormFilterInput(),
      'director'         => new sfWidgetFormFilterInput(),
      'actor'            => new sfWidgetFormFilterInput(),
      'producer'         => new sfWidgetFormFilterInput(),
      'writter'          => new sfWidgetFormFilterInput(),
      'date_release'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'url'              => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'asset_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Asset'), 'column' => 'id')),
      'asset_season_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AssetSeason'), 'column' => 'id')),
      'headline'         => new sfValidatorPass(array('required' => false)),
      'long_description' => new sfValidatorPass(array('required' => false)),
      'transcription'    => new sfValidatorPass(array('required' => false)),
      'number'           => new sfValidatorPass(array('required' => false)),
      'director'         => new sfValidatorPass(array('required' => false)),
      'actor'            => new sfValidatorPass(array('required' => false)),
      'producer'         => new sfValidatorPass(array('required' => false)),
      'writter'          => new sfValidatorPass(array('required' => false)),
      'date_release'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'url'              => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_episode_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetEpisode';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'asset_id'         => 'ForeignKey',
      'asset_season_id'  => 'ForeignKey',
      'headline'         => 'Text',
      'long_description' => 'Text',
      'transcription'    => 'Text',
      'number'           => 'Text',
      'director'         => 'Text',
      'actor'            => 'Text',
      'producer'         => 'Text',
      'writter'          => 'Text',
      'date_release'     => 'Date',
      'url'              => 'Text',
    );
  }
}
