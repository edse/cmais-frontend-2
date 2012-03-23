<?php

/**
 * AssetEvent filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAssetEventFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'title'       => new sfWidgetFormFilterInput(),
      'description' => new sfWidgetFormFilterInput(),
      'headline'    => new sfWidgetFormFilterInput(),
      'date'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'url'         => new sfWidgetFormFilterInput(),
      'country'     => new sfWidgetFormFilterInput(),
      'state'       => new sfWidgetFormFilterInput(),
      'city'        => new sfWidgetFormFilterInput(),
      'address'     => new sfWidgetFormFilterInput(),
      'directions'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'asset_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Asset'), 'column' => 'id')),
      'title'       => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'headline'    => new sfValidatorPass(array('required' => false)),
      'date'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'url'         => new sfValidatorPass(array('required' => false)),
      'country'     => new sfValidatorPass(array('required' => false)),
      'state'       => new sfValidatorPass(array('required' => false)),
      'city'        => new sfValidatorPass(array('required' => false)),
      'address'     => new sfValidatorPass(array('required' => false)),
      'directions'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_event_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetEvent';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'asset_id'    => 'ForeignKey',
      'title'       => 'Text',
      'description' => 'Text',
      'headline'    => 'Text',
      'date'        => 'Date',
      'url'         => 'Text',
      'country'     => 'Text',
      'state'       => 'Text',
      'city'        => 'Text',
      'address'     => 'Text',
      'directions'  => 'Text',
    );
  }
}
