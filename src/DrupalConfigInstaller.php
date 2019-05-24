<?php

namespace UQ\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class DrupalConfigInstaller extends LibraryInstaller {

  /**
   * {@inheritDoc}
   */
  public function getInstallPath(PackageInterface $package) {
    return '../config/drupal-config-installer/';
  }

  /**
   * {@inheritDoc}
   */
  public function supports($packageType) {
    return 'drupal-config' === $packageType;
  }
}
