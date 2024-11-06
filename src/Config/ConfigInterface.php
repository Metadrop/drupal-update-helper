<?php

namespace DrupalUpdater\Config;

interface ConfigInterface {

  const DEFAULT_COMMIT_AUTHOR = 'Drupal <drupal@update-helper>';

  /**
   * Get the commits author.
   *
   * @return string
   *   Commits author.
   */
  public function getAuthor() : string;

  /**
   * Sets the commits author.
   *
   * @param string $author
   *   Commits author.
   */
  public function setAuthor(string $author);

  /**
   * Sets the environment list.
   *
   * @param array $environments
   *   Environemnts.
   */
  public function getEnvironments() : array;

  /**
   * Gets the environment list.
   *
   * @return array|string[]
   *   List of environments.
   */
  public function setEnvironments(array $environments);

  /**
   * Indicates if only securities should be updated.
   *
   * @return bool
   *   True when only securities will e updated.
   */
  public function onlyUpdateSecurities() : bool;

  /**
   * Setup securities update.
   *
   * @param bool $onlySecurities
   *   If true, only securities will be updated.
   */
  public function setOnlySecurities(bool $only_update_securities);

  /**
   * Indicates whether not update dev packages.
   *
   * @return bool
   *   True when dev packages must not be updated.
   */
  public function noDev() : bool;

  /**
   * Setup to not update development packages.
   *
   * @param bool $noDev
   *   If true, development packages won't be updated.
   */
  public function setNoDev(bool $no_dev);

  /**
   * Gets the list of packages to update.
   *
   * @return array
   *   List of packages to update.
   */
  public function getPackages() : array;

  /**
   * Set the list of packages to update.
   *
   * @param array $packages
   *   Packages list.
   */
  public function setPackages(array $packages);

}
