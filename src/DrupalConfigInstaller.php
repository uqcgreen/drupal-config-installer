<?php

namespace UQ\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class DrupalConfigInstaller extends LibraryInstaller {

  /**
   * {@inheritDoc}
   */
  public function getInstallPath(PackageInterface $package) {
    // Lame attempt to find config dir.
    if (is_dir('config')) {
      $dir = 'config';
    }
    else {
      $dir = '../config';
    }
    return $dir . '/drupal-config-installer/';
  }

  /**
   * {@inheritDoc}
   */
  public function supports($packageType) {
    return 'drupal-config' === $packageType;
  }
}
