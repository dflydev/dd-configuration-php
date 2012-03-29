<?php

/*
 * This file is part of the dflydev-configuration-php package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dflydev\configuration\source;

/**
 * Description of MapSource
 *
 * @author Beau Simensen <beau@dflydev.com>
 */
class MapSource implements ISource {
    
    /**
     * @var type Configuration source storage container
     */
    private $map;
    
    /**
     * Constructor
     * @param array $map Initial settings
     */
    public function __construct(array $map = null) {
        $this->map = null === $map ? array() : $map;
    }
    
    /**
     * {@inheritdoc}
     */
    public function exists($key) {
        return isset($this->map[$key]);
    }

    /**
     * {@inheritdoc}
     */
    public function get($key) {
        return isset($this->map[$key]) ? $this->map[$key] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function keys() {
        return array_keys($this->map);
    }
    
}