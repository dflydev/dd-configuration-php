<?php

/*
 * This file is part of the dflydev-configuration-php package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dflydev\configuration\resourceLoader;

/**
 * Description of ClasspathResourceLoader
 *
 * @author Beau Simensen <beau@dflydev.com>
 */
class ClasspathResourceLoader extends PathResourceLoader {
    
    /**
     * Constructor
     * @param array $prefixPaths Paths to prepend to start of classpath
     * @param array $suffixPaths Patsh to append to end of classpath
     */
    public function __construct($prefixPaths = null, $suffixPaths = null) {
        if ($prefixPaths === null) { $prefixPaths = array(); }
        if ($suffixPaths === null) { $suffixPaths = array(); }
        parent::PathResourceLoader(array_merge(
            $prefixPaths,
            explode(PATH_SEPARATOR , get_include_path()),
            $suffixPaths
        ));
    }

}