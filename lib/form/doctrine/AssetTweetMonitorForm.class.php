<?php

/**
 * AssetTweetMonitor form.
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AssetTweetMonitorForm extends BaseAssetTweetMonitorForm
{
  public function configure()
  {
    unset($this['asset_id']);
  }
}
