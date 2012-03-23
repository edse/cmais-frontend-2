<?php

/**
 * AssetSeason filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAssetSeasonFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'headline' => new sfWidgetFormFilterInput(),
      'number'   => new sfWidgetFormFilterInput(),
      'year'     => new sfWidgetFormFilterInput(),
      'director' => new sfWidgetFormFilterInput(),
      'url'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'asset_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Asset'), 'column' => 'id')),
      'headline' => new sfValidatorPass(array('required' => false)),
      'number'   => new sfValidatorPass(array('required' => false)),
      'year'     => new sfValidatorPass(array('required' => false)),
      'director' => new sfValidatorPass(array('required' => false)),
      'url'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_season_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetSeason';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'asset_id' => 'ForeignKey',
      'headline' => 'Text',
      'number'   => 'Text',
      'year'     => 'Text',
      'director' => 'Text',
      'url'      => 'Text',
    );
  }
}
