<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfSuperCache base class.
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfSuperCache.class.php 8446 2008-04-14 14:31:09Z fabien $
 */
class sfSuperCache
{
  /**
   * Clears the super cache by listening to the task.cache.clear event.
   *
   * @param sfEvent An sfEvent instance
   */
  static public function clearCache(sfEvent $event)
  {
    $config = sfFilterConfigHandler::getConfiguration($event['app']->getConfigPaths('config/filters.yml'));

    $event->getSubject()->logSection('cache', 'Clearing super cache');

    // find super cache configuration
    $found = false;
    $cacheDir = 'cache';
    foreach ($config as $value)
    {
      if ('sfSuperCacheFilter' == $value['class'])
      {
        $found = true;
        if (isset($value['param']['cache_dir']))
        {
          $cacheDir = $value['param']['cache_dir'];
        }

        break;
      }
    }

    if ($found)
    {
      // clear the cache
      $cacheDir = sfConfig::get('sf_web_dir').'/'.$cacheDir;
      if (is_dir($cacheDir))
      {
        // remove cache files
        $event->getSubject()->getFilesystem()->remove(sfFinder::type('file')->ignore_version_control()->discard('.sf')->in($cacheDir));
      }
    }
  }
}
