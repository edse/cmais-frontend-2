<?php

/**
 * AssetTweet filter form base class.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAssetTweetFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'asset_tweet_monitor_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AssetTweetMonitor'), 'add_empty' => true)),
      'date_published'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'content'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'url'                    => new sfWidgetFormFilterInput(),
      'avatar'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'author'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'author_url'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'asset_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Asset'), 'column' => 'id')),
      'asset_tweet_monitor_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AssetTweetMonitor'), 'column' => 'id')),
      'date_published'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'content'                => new sfValidatorPass(array('required' => false)),
      'url'                    => new sfValidatorPass(array('required' => false)),
      'avatar'                 => new sfValidatorPass(array('required' => false)),
      'author'                 => new sfValidatorPass(array('required' => false)),
      'author_url'             => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_tweet_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetTweet';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'asset_id'               => 'ForeignKey',
      'asset_tweet_monitor_id' => 'ForeignKey',
      'date_published'         => 'Date',
      'content'                => 'Text',
      'url'                    => 'Text',
      'avatar'                 => 'Text',
      'author'                 => 'Text',
      'author_url'             => 'Text',
    );
  }
}
