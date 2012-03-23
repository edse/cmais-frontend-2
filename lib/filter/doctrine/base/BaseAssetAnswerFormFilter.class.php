<?php

/**
 * AssetAnswer filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAssetAnswerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'asset_question_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AssetQuestion'), 'add_empty' => true)),
      'answer'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'votes'             => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'asset_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Asset'), 'column' => 'id')),
      'asset_question_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AssetQuestion'), 'column' => 'id')),
      'answer'            => new sfValidatorPass(array('required' => false)),
      'votes'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('asset_answer_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetAnswer';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'asset_id'          => 'ForeignKey',
      'asset_question_id' => 'ForeignKey',
      'answer'            => 'Text',
      'votes'             => 'Number',
    );
  }
}
