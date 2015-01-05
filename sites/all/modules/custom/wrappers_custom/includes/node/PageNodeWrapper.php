<?php
/**
 * @file
 * class PageNodeWrapper
 */

class PageNodeWrapper extends WdNodeWrapper {

  private static $bundle = 'page';

  /**
   * Create a new page node.
   *
   * @param array $values
   * @param string $language
   * @return PageNodeWrapper
   */
  public static function create($values = array(), $language = LANGUAGE_NONE) {
    $values += array('bundle' => self::$bundle);
    $entity_wrapper = parent::create($values, $language);
    return new PageNodeWrapper($entity_wrapper->value());
  }

  /**
   * Retrieves body
   *
   * @return mixed
   */
  public function getBody() {
    return $this->get('body');
  }

  /**
   * Sets body
   *
   * @param $value
   *
   * @return $this
   */
  public function setBody($value) {
    $this->set('body', $value);
    return $this;
  }

}
