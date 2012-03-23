<?php
/*
 * file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfSuperCacheFilter.class.php 24554 2009-11-30 10:24:36Z fabien $
 */
class sfSuperCacheFilter extends sfFilter
{
  public function execute ($filterChain)
  {
    // execute next filter
    $filterChain->execute();

    $response = $this->getContext()->getResponse();

    // execute this filter only if cache is set and no GET or POST parameters
    // execute this filter not in debug mode, only if no_script_name and for 200 response code
    if (
      (!sfConfig::get('sf_cache') || count($_GET) || count($_POST))
      ||
      (sfConfig::get('sf_debug') || !sfConfig::get('sf_no_script_name') || $response->getStatusCode() != 200)
    )
    {
      return;
    }

    // only if cache is set for the entire page
    $cacheManager = $this->getContext()->getViewCacheManager();
    $uri = $this->getContext()->getRouting()->getCurrentInternalUri();
    if ($cacheManager->isCacheable($uri) && $cacheManager->withLayout($uri))
    {
      // save super cache
      $request = $this->getContext()->getRequest();
      $pathInfo = $request->getPathInfo();
      /*
      $file =
        sfConfig::get('sf_web_dir').'/'.$this->getParameter('cache_dir', 'cache').
        ($this->getParameter('with_host', true) ? '/'.$request->getHost() : '').
        ('/' == $pathInfo[strlen($pathInfo) - 1] ? $pathInfo.'index.html' : $pathInfo).
        ($this->getParameter('check_lifetime', true) ? '.php' : '')
      ;
      */

      $file =
        sfConfig::get('sf_web_dir').'/'.$this->getParameter('cache_dir', 'cache').
        ($this->getParameter('with_host', true) ? '/'.$request->getHost() : '').
        $pathInfo.'/index.html'.
        ($this->getParameter('check_lifetime', true) ? '.php' : '')
      ;

      $current_umask = umask();
      umask(0000);
      $dir = dirname($file);
      if (is_file($dir))
      {
        unlink($dir);
      }
      if (!is_dir($dir))
      {
        mkdir($dir, 0777, true);
      }
      // check conflicts between directories and files with the same name
      if (!is_dir($file))
      {
        $response = $this->getContext()->getResponse();

        $expiryDate = time() + $cacheManager->getLifetime($uri);
        // Note: some proxies do cache 302 responses, despite the rfc, so we explicitely ask for no cache
        if ($this->getParameter('check_lifetime', true))
        {
          $header = sprintf("<?php if (time() > %d) { unlink(__FILE__); header('Pragma: no-cache'); header('Location: '.\$_SERVER['REQUEST_URI']);  exit; } ?>\n", $expiryDate);
          $header .= sprintf("<?php header('Content-Type: %s') ?>\n", $response->getContentType());
          foreach(array('Cache-Control', 'Pragma', 'Expires') as $key)
          {
            if ($value = $response->getHttpHeader($key))
            {
              $header .= sprintf("<?php header('%s: %s') ?>\n", $key, $value);
            }
          }
        }
        else
        {
          $header = '';
        }
        file_put_contents($file, $header.$response->getContent());
        chmod($file, 0666);
      }
      umask($current_umask);
    }
  }
}
