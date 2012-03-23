<?php

/**
 * Program filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProgramFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'site_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Site'), 'add_empty' => true)),
      'channel_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Channel'), 'add_empty' => true)),
      'type'             => new sfWidgetFormFilterInput(),
      'title'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'      => new sfWidgetFormFilterInput(),
      'long_description' => new sfWidgetFormFilterInput(),
      'schedule'         => new sfWidgetFormFilterInput(),
      'image_icon'       => new sfWidgetFormFilterInput(),
      'image_thumb'      => new sfWidgetFormFilterInput(),
      'image_live'       => new sfWidgetFormFilterInput(),
      'is_active'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_in_menu'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'             => new sfWidgetFormFilterInput(),
      'channels_list'    => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Channel')),
    ));

    $this->setValidators(array(
      'site_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Site'), 'column' => 'id')),
      'channel_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Channel'), 'column' => 'id')),
      'type'             => new sfValidatorPass(array('required' => false)),
      'title'            => new sfValidatorPass(array('required' => false)),
      'description'      => new sfValidatorPass(array('required' => false)),
      'long_description' => new sfValidatorPass(array('required' => false)),
      'schedule'         => new sfValidatorPass(array('required' => false)),
      'image_icon'       => new sfValidatorPass(array('required' => false)),
      'image_thumb'      => new sfValidatorPass(array('required' => false)),
      'image_live'       => new sfValidatorPass(array('required' => false)),
      'is_active'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_in_menu'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'             => new sfValidatorPass(array('required' => false)),
      'channels_list'    => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Channel', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('program_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addChannelsListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.ChannelProgram ChannelProgram')
      ->andWhereIn('ChannelProgram.channel_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Program';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'site_id'          => 'ForeignKey',
      'channel_id'       => 'ForeignKey',
      'type'             => 'Text',
      'title'            => 'Text',
      'description'      => 'Text',
      'long_description' => 'Text',
      'schedule'         => 'Text',
      'image_icon'       => 'Text',
      'image_thumb'      => 'Text',
      'image_live'       => 'Text',
      'is_active'        => 'Boolean',
      'is_in_menu'       => 'Boolean',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
      'slug'             => 'Text',
      'channels_list'    => 'ManyKey',
    );
  }
}
