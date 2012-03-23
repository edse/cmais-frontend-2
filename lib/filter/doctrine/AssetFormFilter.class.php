<?php

/**
 * Asset filter form.
 *
 * @package    astolfo
 * @subpackage filter
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AssetFormFilter extends BaseAssetFormFilter
{
  public function configure()
  {
    
    $this->widgetSchema['asset_type_id'] = new sfWidgetFormDoctrineChoice(array(
      'model'     => 'AssetType',
      'add_empty' => true,
      'order_by'  => array('title', 'asc')
    ));
    $this->widgetSchema['site_id'] = new sfWidgetFormDoctrineChoice(array(
      'model'     => 'Site',
      'add_empty' => true,
      'order_by'  => array('title', 'asc')
    ));

    $this->widgetSchema['description'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->widgetSchema['is_active'] = new sfWidgetFormChoice(array('choices' => array('' => 'sim ou não', 1 => 'sim', 0 => 'não')));

  }
}
