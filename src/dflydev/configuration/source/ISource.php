<?php

/*
 * This file is part of the dflydev-configuration-php package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dflydev\configuration\source;

/**
 *
 * @author Beau Simensen <beau@dflydev.com>
 */
interface ISource {
    
    /**
     * Get all keys
     */
    function keys();
    
    /**
     * Determine if a key exists
     */
    function exists($key);
    
    /**
     * Get the value for a key
     */
    function get($key);
    
}