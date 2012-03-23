<?php

/**
 * Log filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLogFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'site_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Site'), 'add_empty' => true)),
      'asset'       => new sfWidgetFormFilterInput(),
      'asset_title' => new sfWidgetFormFilterInput(),
      'action'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'class'       => new sfWidgetFormFilterInput(),
      'ip'          => new sfWidgetFormFilterInput(),
      'status'      => new sfWidgetFormFilterInput(),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'site_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Site'), 'column' => 'id')),
      'asset'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'asset_title' => new sfValidatorPass(array('required' => false)),
      'action'      => new sfValidatorPass(array('required' => false)),
      'class'       => new sfValidatorPass(array('required' => false)),
      'ip'          => new sfValidatorPass(array('required' => false)),
      'status'      => new sfValidatorPass(array('required' => false)),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('log_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Log';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'user_id'     => 'ForeignKey',
      'site_id'     => 'ForeignKey',
      'asset'       => 'Number',
      'asset_title' => 'Text',
      'action'      => 'Text',
      'class'       => 'Text',
      'ip'          => 'Text',
      'status'      => 'Text',
      'created_at'  => 'Date',
    );
  }
}
