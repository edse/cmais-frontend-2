<?php

/**
 * VideoDropbox form base class.
 *
 * @method VideoDropbox getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVideoDropboxForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'asset_video_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AssetVideo'), 'add_empty' => false)),
      'youtube_id'     => new sfWidgetFormInputText(),
      'action'         => new sfWidgetFormInputText(),
      'folder'         => new sfWidgetFormInputText(),
      'status'         => new sfWidgetFormInputText(),
      'message'        => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asset_video_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AssetVideo'))),
      'youtube_id'     => new sfValidatorInteger(array('required' => false)),
      'action'         => new sfValidatorString(array('max_length' => 255)),
      'folder'         => new sfValidatorString(array('max_length' => 255)),
      'status'         => new sfValidatorString(array('max_length' => 255)),
      'message'        => new sfValidatorString(array('max_length' => 255)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('video_dropbox[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VideoDropbox';
  }

}
