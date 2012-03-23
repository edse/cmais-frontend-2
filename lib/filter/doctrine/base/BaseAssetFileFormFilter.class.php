<?php

/**
 * AssetFile filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAssetFileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'file'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'genre'     => new sfWidgetFormFilterInput(),
      'source'    => new sfWidgetFormFilterInput(),
      'author'    => new sfWidgetFormFilterInput(),
      'extension' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'file_size' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'asset_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Asset'), 'column' => 'id')),
      'file'      => new sfValidatorPass(array('required' => false)),
      'genre'     => new sfValidatorPass(array('required' => false)),
      'source'    => new sfValidatorPass(array('required' => false)),
      'author'    => new sfValidatorPass(array('required' => false)),
      'extension' => new sfValidatorPass(array('required' => false)),
      'file_size' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_file_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetFile';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'asset_id'  => 'ForeignKey',
      'file'      => 'Text',
      'genre'     => 'Text',
      'source'    => 'Text',
      'author'    => 'Text',
      'extension' => 'Text',
      'file_size' => 'Text',
    );
  }
}
