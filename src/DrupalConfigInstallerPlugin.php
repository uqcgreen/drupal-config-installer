<?php

namespace UQ\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class DrupalConfigInstallerPlugin implements PluginInterface {
  public function activate(Composer $composer, IOInterface $io) {
    $installer = new DrupalConfigInstaller($io, $composer);
    $composer->getInstallationManager()->addInstaller($installer);
  }
}
