<?php

/**
 * AssetPerson filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAssetPersonFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'type'         => new sfWidgetFormFilterInput(),
      'name'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'headline'     => new sfWidgetFormFilterInput(),
      'dob'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'bio'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'website_url'  => new sfWidgetFormFilterInput(),
      'facebook_url' => new sfWidgetFormFilterInput(),
      'twitter_url'  => new sfWidgetFormFilterInput(),
      'youtube_url'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'asset_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Asset'), 'column' => 'id')),
      'type'         => new sfValidatorPass(array('required' => false)),
      'name'         => new sfValidatorPass(array('required' => false)),
      'headline'     => new sfValidatorPass(array('required' => false)),
      'dob'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'bio'          => new sfValidatorPass(array('required' => false)),
      'website_url'  => new sfValidatorPass(array('required' => false)),
      'facebook_url' => new sfValidatorPass(array('required' => false)),
      'twitter_url'  => new sfValidatorPass(array('required' => false)),
      'youtube_url'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_person_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetPerson';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'asset_id'     => 'ForeignKey',
      'type'         => 'Text',
      'name'         => 'Text',
      'headline'     => 'Text',
      'dob'          => 'Date',
      'bio'          => 'Text',
      'website_url'  => 'Text',
      'facebook_url' => 'Text',
      'twitter_url'  => 'Text',
      'youtube_url'  => 'Text',
    );
  }
}
