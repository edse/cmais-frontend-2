<?php

/**
 * AssetPerson form base class.
 *
 * @method AssetPerson getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssetPersonForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'asset_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => false)),
      'type'         => new sfWidgetFormInputText(),
      'name'         => new sfWidgetFormInputText(),
      'headline'     => new sfWidgetFormInputText(),
      'dob'          => new sfWidgetFormDate(),
      'bio'          => new sfWidgetFormInputText(),
      'website_url'  => new sfWidgetFormInputText(),
      'facebook_url' => new sfWidgetFormInputText(),
      'twitter_url'  => new sfWidgetFormInputText(),
      'youtube_url'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asset_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'))),
      'type'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 255)),
      'headline'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dob'          => new sfValidatorDate(array('required' => false)),
      'bio'          => new sfValidatorPass(),
      'website_url'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'facebook_url' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'twitter_url'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'youtube_url'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_person[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetPerson';
  }

}
