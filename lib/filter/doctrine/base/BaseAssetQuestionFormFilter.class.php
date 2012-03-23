<?php

/**
 * AssetQuestion filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAssetQuestionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'asset_questionnaire_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AssetQuestionnaire'), 'add_empty' => true)),
      'question'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'asset_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Asset'), 'column' => 'id')),
      'asset_questionnaire_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AssetQuestionnaire'), 'column' => 'id')),
      'question'               => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_question_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetQuestion';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'asset_id'               => 'ForeignKey',
      'asset_questionnaire_id' => 'ForeignKey',
      'question'               => 'Text',
    );
  }
}
