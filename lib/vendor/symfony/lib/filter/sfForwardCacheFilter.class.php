<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

/**
 * sfCacheFilter deals with page caching and action caching.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfCacheFilter.class.php 24619 2009-11-30 23:14:18Z FabianLange $
 */
class sfForwardCacheFilter extends sfCacheFilter {


    protected function getCurrentCacheKey() {
        $actionStack = $this->context->getActionStack()->getLastEntry();

        $actionName = $actionStack->getActionName();
        $moduleName = $actionStack->getModuleName();

        $cacheKey = $moduleName.'/'.$actionName;

        //parameters in uri
        $parameters = $this->request->getParameterHolder()->getAll();
        unset($parameters['module'], $parameters['action']);

        $params = array();
        foreach ($parameters as $key => $value) {
            $params[] = $key.'='.$value;
        }

        // sort to guaranty unicity
        sort($params);

        $params = $params ? '?'.implode('&', $params) : '';

        $cacheKey.= $params;

        if ($getParameters = $this->request->getGetParameters()) {
            $cacheKey .= false === strpos($cacheKey, '?') ? '?' : '&';
            $cacheKey .= http_build_query($getParameters, null, '&');
        }

        return $cacheKey;
    }

    public function executeBeforeExecution() {
        $uri = $this->getCurrentCacheKey();

        if (null === $uri) {
            return true;
        }

        // page cache
        $cacheable = $this->cacheManager->isCacheable($uri);
        if ($cacheable && $this->cacheManager->withLayout($uri)) {
            $inCache = $this->cacheManager->getPageCache($uri);
            $this->cache[$uri] = $inCache;

            if ($inCache) {
                // page is in cache, so no need to run execution filter
                return false;
            }
        }

        return true;
    }

    /**
     * Executes this filter.
     */
    public function executeBeforeRendering() {
        // cache only 200 HTTP status
        if (200 != $this->response->getStatusCode()) {
            return;
        }

        $uri = $this->getCurrentCacheKey();

        // save page in cache
        if (isset($this->cache[$uri]) && false === $this->cache[$uri]) {
            $this->setCacheExpiration($uri);
            $this->setCacheValidation($uri);

            // set Vary headers
            foreach ($this->cacheManager->getVary($uri, 'page') as $vary) {
                $this->response->addVaryHttpHeader($vary);
            }

            $this->cacheManager->setPageCache($uri);
        }

        // cache validation
        $this->checkCacheValidation();
    }

}
