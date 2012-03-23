<?php

/**
 * AssetQuestionnaire form base class.
 *
 * @method AssetQuestionnaire getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssetQuestionnaireForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'asset_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => false)),
      'name'     => new sfWidgetFormInputText(),
      'headline' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asset_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'))),
      'name'     => new sfValidatorString(array('max_length' => 255)),
      'headline' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_questionnaire[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetQuestionnaire';
  }

}
