<?php

/*
 * This file is part of the dflydev-configuration-php package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dflydev\configuration\resourceLoader;

/**
 * Description of PathResource
 *
 * @author Beau Simensen <beau@dflydev.com>
 */
class FileResource extends Resource {

    /**
     * @var string Full path to resource
     */
    private $fullPath;
    
    /**
     * Constructor.
     * 
     * @param string $content Content
     * @param string $fullPath Full path to resource
     */
    public function __construct($content, $fullPath, $lastUpdated) {
        $this->fullPath = $fullPath;
        parent::Resource($content);
    }

    /**
     * @return string Full path to resource
     */
    public function fullPath() { return $this->fullPath; }

}