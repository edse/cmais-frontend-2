<?php

/**
 * AssetAnswer form base class.
 *
 * @method AssetAnswer getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssetAnswerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'asset_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => false)),
      'asset_question_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AssetQuestion'), 'add_empty' => false)),
      'answer'            => new sfWidgetFormInputText(),
      'votes'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asset_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'))),
      'asset_question_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AssetQuestion'))),
      'answer'            => new sfValidatorString(array('max_length' => 255)),
      'votes'             => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_answer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetAnswer';
  }

}
