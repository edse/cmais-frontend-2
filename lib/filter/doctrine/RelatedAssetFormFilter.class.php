<?php

/**
 * RelatedAsset filter form.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RelatedAssetFormFilter extends BaseRelatedAssetFormFilter
{
  public function configure()
  {
    $this->widgetSchema['asset_type_id'] = new sfWidgetFormDoctrineChoice(array(
      'model'     => 'AssetType',
      'add_empty' => false,
      'order_by'  => array('title', 'asc')
    ));
    
    $this->widgetSchema['site_id'] = new sfWidgetFormDoctrineChoice(array(
      'model'     => 'AssetType',
      'add_empty' => false,
      'order_by'  => array('title', 'asc')
    ));

  }
}
