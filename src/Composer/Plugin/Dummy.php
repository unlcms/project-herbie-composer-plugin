<?php

/**
 * Dummy class because Composer requires it.
 */

namespace unlcms\Composer\Plugin;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Dummy implements PluginInterface
{
    protected $composer;
    protected $io;
    
    public function activate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
    }
}
