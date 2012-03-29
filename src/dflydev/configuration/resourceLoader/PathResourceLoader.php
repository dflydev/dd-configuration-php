<?php

/*
 * This file is part of the dflydev-configuration-php package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dflydev\configuration\resourceLoader;

/**
 * Description of PathResourceLocator
 *
 * @author Beau Simensen <beau@dflydev.com>
 */
class PathResourceLoader implements IResourceLoader {
    
    /**
     * @var array Paths
     */
    private $paths;

    /**
     * Constructor.
     * 
     * @param type $paths Paths
     */
    function __construct($paths) {
        $this->paths = is_array($paths) ? $paths : array($paths);
    }

    /**
     * {@inheritdoc}
     */
    public function load($resource) {
        foreach ( $this->paths as $path ) {
            $fullPath = realpath($path . '/' . $resource);
            if (file_exists($fullPath)) {
                return new Resource(
                    @file_get_contents($fullPath),
                    $fullPath
                );
            }
        }
        throw new exception\ResourceNotFoundException('Could not find resource "' . $resource . '"');
    }

}