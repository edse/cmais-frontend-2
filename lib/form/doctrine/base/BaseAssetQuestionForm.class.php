<?php

/**
 * AssetQuestion form base class.
 *
 * @method AssetQuestion getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssetQuestionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'asset_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'asset_questionnaire_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AssetQuestionnaire'), 'add_empty' => true)),
      'question'               => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asset_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'required' => false)),
      'asset_questionnaire_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AssetQuestionnaire'), 'required' => false)),
      'question'               => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('asset_question[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetQuestion';
  }

}
