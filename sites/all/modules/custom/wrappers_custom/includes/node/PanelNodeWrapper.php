<?php
/**
 * @file
 * class PanelNodeWrapper
 */

class PanelNodeWrapper extends WdNodeWrapper {

  private static $bundle = 'panel';

  /**
   * Create a new panel node.
   *
   * @param array $values
   * @param string $language
   * @return PanelNodeWrapper
   */
  public static function create($values = array(), $language = LANGUAGE_NONE) {
    $values += array('bundle' => self::$bundle);
    $entity_wrapper = parent::create($values, $language);
    return new PanelNodeWrapper($entity_wrapper->value());
  }

}