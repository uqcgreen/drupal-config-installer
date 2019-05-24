<?php

namespace UQ\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class CIInstaller extends LibraryInstaller {

  /**
   * {@inheritDoc}
   */
  public function getInstallPath(PackageInterface $package) {
    return 'ci/' . $package->getPrettyName();
  }

  /**
   * {@inheritDoc}
   */
  public function supports($packageType) {
    return 'uq-robo-tasks' === $packageType;
  }
}
