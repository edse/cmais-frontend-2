<?php

/**
 * Site filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSiteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'type'                => new sfWidgetFormFilterInput(),
      'title'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'         => new sfWidgetFormFilterInput(),
      'url'                 => new sfWidgetFormFilterInput(),
      'path'                => new sfWidgetFormFilterInput(),
      'headline'            => new sfWidgetFormFilterInput(),
      'meta_title'          => new sfWidgetFormFilterInput(),
      'meta_charset'        => new sfWidgetFormFilterInput(),
      'meta_classification' => new sfWidgetFormFilterInput(),
      'meta_description'    => new sfWidgetFormFilterInput(),
      'meta_keywords'       => new sfWidgetFormFilterInput(),
      'meta_author'         => new sfWidgetFormFilterInput(),
      'youtube_channel'     => new sfWidgetFormFilterInput(),
      'youtube_genre'       => new sfWidgetFormFilterInput(),
      'twitter_account'     => new sfWidgetFormFilterInput(),
      'twitter_url'         => new sfWidgetFormFilterInput(),
      'facebook_url'        => new sfWidgetFormFilterInput(),
      'image_icon'          => new sfWidgetFormFilterInput(),
      'image_thumb'         => new sfWidgetFormFilterInput(),
      'contact_email'       => new sfWidgetFormFilterInput(),
      'is_active'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'                => new sfWidgetFormFilterInput(),
      'users_list'          => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser')),
    ));

    $this->setValidators(array(
      'type'                => new sfValidatorPass(array('required' => false)),
      'title'               => new sfValidatorPass(array('required' => false)),
      'description'         => new sfValidatorPass(array('required' => false)),
      'url'                 => new sfValidatorPass(array('required' => false)),
      'path'                => new sfValidatorPass(array('required' => false)),
      'headline'            => new sfValidatorPass(array('required' => false)),
      'meta_title'          => new sfValidatorPass(array('required' => false)),
      'meta_charset'        => new sfValidatorPass(array('required' => false)),
      'meta_classification' => new sfValidatorPass(array('required' => false)),
      'meta_description'    => new sfValidatorPass(array('required' => false)),
      'meta_keywords'       => new sfValidatorPass(array('required' => false)),
      'meta_author'         => new sfValidatorPass(array('required' => false)),
      'youtube_channel'     => new sfValidatorPass(array('required' => false)),
      'youtube_genre'       => new sfValidatorPass(array('required' => false)),
      'twitter_account'     => new sfValidatorPass(array('required' => false)),
      'twitter_url'         => new sfValidatorPass(array('required' => false)),
      'facebook_url'        => new sfValidatorPass(array('required' => false)),
      'image_icon'          => new sfValidatorPass(array('required' => false)),
      'image_thumb'         => new sfValidatorPass(array('required' => false)),
      'contact_email'       => new sfValidatorPass(array('required' => false)),
      'is_active'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'                => new sfValidatorPass(array('required' => false)),
      'users_list'          => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('site_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addUsersListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.SiteUser SiteUser')
      ->andWhereIn('SiteUser.user_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Site';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'type'                => 'Text',
      'title'               => 'Text',
      'description'         => 'Text',
      'url'                 => 'Text',
      'path'                => 'Text',
      'headline'            => 'Text',
      'meta_title'          => 'Text',
      'meta_charset'        => 'Text',
      'meta_classification' => 'Text',
      'meta_description'    => 'Text',
      'meta_keywords'       => 'Text',
      'meta_author'         => 'Text',
      'youtube_channel'     => 'Text',
      'youtube_genre'       => 'Text',
      'twitter_account'     => 'Text',
      'twitter_url'         => 'Text',
      'facebook_url'        => 'Text',
      'image_icon'          => 'Text',
      'image_thumb'         => 'Text',
      'contact_email'       => 'Text',
      'is_active'           => 'Boolean',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
      'slug'                => 'Text',
      'users_list'          => 'ManyKey',
    );
  }
}
