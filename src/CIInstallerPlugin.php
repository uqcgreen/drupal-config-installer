<?php

namespace UQ\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class CIInstallerPlugin implements PluginInterface {
  public function activate(Composer $composer, IOInterface $io) {
    $installer = new CIInstaller($io, $composer);
    $composer->getInstallationManager()->addInstaller($installer);
  }
}
