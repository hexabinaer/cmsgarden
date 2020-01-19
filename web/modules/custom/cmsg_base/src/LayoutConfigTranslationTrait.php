<?php

namespace Drupal\cmsg_base;

use Drupal\Core\Language\LanguageInterface;

/**
 * Helper trait, which allows layouts to save configuration language specific.
 *
 * In order to save config in diffrent languages, just switch the interface
 * language via url and change your layout config values. They will be saved
 * and loaded in context automatically when using the get and set functions
 * getTranslatedConfigurationValue and setTranslatedConfigurationValue.
 *
 * @ingroup i18n
 */
trait LayoutConfigTranslationTrait {

  /**
   * The the language manager service.
   *
   * @var \Drupal\Core\Language\LanguageManagerInterface
   */
  protected $languageManager;

  /**
   * Gets the language manager service.
   *
   * @return \Drupal\Core\Language\LanguageManagerInterface
   *   The the language manager service.
   */
  protected function getLanguageManager() {
    if (!$this->languageManager) {
      $this->languageManager = \Drupal::languageManager();
    }

    return $this->languageManager;
  }

  /**
   * Gets the current langcode.
   *
   * Since it's config, we use the TYPE_INTERFACE constant to determine the
   * current language. @see Drupal\Core\Language\LanguageInterface
   *
   * @return string
   *   Teturns the current langcode.
   */
  protected function getCurrentLangcode() {
    return $this->getLanguageManager()
      ->getCurrentLanguage(LanguageInterface::TYPE_INTERFACE)
      ->getId();
  }

  /**
   * Gets the default langcode.
   *
   * @return string
   *   Returns the default langcode.
   */
  protected function getDefaultLangcode() {
    return $this->getLanguageManager()->getDefaultLanguage()->getId();
  }

  /**
   * Gets a translated value from configuration, if available.
   *
   * @param $key
   *   The key to search for in the configuration.
   * @param bool $fallback
   *   Parameter to disable the default languages fallback.
   * @return mixed
   *   The translated config item, if available. Otherwise we try to serve with
   *   the default language item.
   */
  protected function getTranslatedConfigurationValue($key, $fallback = TRUE) {
    // If value exists for current langcode, return it.
    if (!empty($this->configuration['#' . $this->getCurrentLangcode()][$key])) {
      return $this->configuration['#' . $this->getCurrentLangcode()][$key];
    }
    // Otherwise fall back to default langcode.
    if ($fallback) {
      return !empty($this->configuration['#' . $this->getDefaultLangcode()][$key]) ? $this->configuration['#' . $this->getDefaultLangcode()][$key] : NULL;
    }
  }

  /**
   * Sets a value to configuration.
   *
   * @param $key
   *   The key for the config.
   * @param $value
   *   The value to be written to language specific configuration.
   * @return array
   *   The configuration array.
   */
  protected function setTranslatedConfigurationValue($key, $value) {
    $this->configuration['#' . $this->getCurrentLangcode()][$key] = $value;
    return $this->configuration;
  }

  protected function setTranslatableConfiguration($configuration) {
    $this->configuration = $configuration;
  }

}
