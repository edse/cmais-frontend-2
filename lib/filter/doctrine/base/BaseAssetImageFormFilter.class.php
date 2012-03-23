<?php

/**
 * AssetImage filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAssetImageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'file'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'original_file'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'headline'           => new sfWidgetFormFilterInput(),
      'genre'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'source'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'author'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'original_file_size' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'width'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'height'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'extension'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'asset_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Asset'), 'column' => 'id')),
      'file'               => new sfValidatorPass(array('required' => false)),
      'original_file'      => new sfValidatorPass(array('required' => false)),
      'headline'           => new sfValidatorPass(array('required' => false)),
      'genre'              => new sfValidatorPass(array('required' => false)),
      'source'             => new sfValidatorPass(array('required' => false)),
      'author'             => new sfValidatorPass(array('required' => false)),
      'original_file_size' => new sfValidatorPass(array('required' => false)),
      'width'              => new sfValidatorPass(array('required' => false)),
      'height'             => new sfValidatorPass(array('required' => false)),
      'extension'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_image_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetImage';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'asset_id'           => 'ForeignKey',
      'file'               => 'Text',
      'original_file'      => 'Text',
      'headline'           => 'Text',
      'genre'              => 'Text',
      'source'             => 'Text',
      'author'             => 'Text',
      'original_file_size' => 'Text',
      'width'              => 'Text',
      'height'             => 'Text',
      'extension'          => 'Text',
    );
  }
}
