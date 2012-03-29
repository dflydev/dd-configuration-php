<?php

/*
 * This file is part of the dflydev-configuration-php package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dflydev\configuration\resourceLoader;

/**
 * Description of Resource
 *
 * @author Beau Simensen <beau@dflydev.com>
 */
class Resource {
    
    /**
     * @var string content
     */
    private $content;

    /**
     * Constructor.
     * 
     * @param type $qualifiedResourceName Qualified resource name
     * @param type $content Content
     */
    public function __construct($content, $identifier, $lastUpdated) {
        $this->content = $content;
    }

    /**
     * Content of the resource
     * @return string Content
     */
    public function content() { return $this->content; }

    /**
     * @return string Full path to resource
     */
    public function fullPath() { return $this->fullPath; }
    
}