<?php

/*
 * This file is part of the dflydev-configuration-php package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dflydev\configuration\source;

use dflydev\configuration\resourceLoader\IResourceLoader;

/**
 * Description of PropertiesConfiguration
 *
 * @author Beau Simensen <beau@dflydev.com>
 */
class PropertiesConfiguration extends MapSource implements ICacheable {
    
    /**
     * @var IResourceLoader Resource loader
     */
    private $resourceLoader;
    
    /**
     * Constructor.
     * 
     * @param IResourceLoader $resourceLoader Resource loader
     * @param string|array $resourcesToLoad Resource(s) to load
     */
    function __construct(IResourceLoader $resourceLoader, $resourcesToLoad) {
        if ( ! is_array($resourcesToLoad) ) { $resourcesToLoad = array($resourcesToLoad); }
        $map = array();
        foreach ( $resourcesToLoad as $resourceToLoad ) {
            $resource = $resourceLoader->load($resourceToLoad);
            foreach ( explode("\n", $resource->content()) as $line ) {
                preg_match('/^\s*([^=]+?)\s*=\s*(.+?)\s*$/', $line, $matches);
                if ( count($matches) > 1 && strlen($matches[1]) > 0 && strpos($matches[1], '#') !== 0) {
                    $map[$matches[1]] = $matches[2];
                }
            }
        }
        parent::MapSource($map);
    }

}