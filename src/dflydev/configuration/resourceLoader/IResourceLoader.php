<?php

/*
 * This file is part of the dflydev-configuration-php package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dflydev\configuration\resourceLoader;

/**
 *
 * @author Beau Simensen <beau@dflydev.com>
 */
interface IResourceLoader {
    
    /**
     * Load a resource
     * @param string $resource Name of resource to load
     * @return Resource Resource
     * @throws exception\ResourceNotFoundException
     */
    function load($resource);

}