<?php
/**
 * @file
 * class NewsNodeWrapper
 */

class NewsNodeWrapper extends WdNodeWrapper {

  private static $bundle = 'news';

  /**
   * Create a new news node.
   *
   * @param array $values
   * @param string $language
   * @return NewsNodeWrapper
   */
  public static function create($values = array(), $language = LANGUAGE_NONE) {
    $values += array('bundle' => self::$bundle);
    $entity_wrapper = parent::create($values, $language);
    return new NewsNodeWrapper($entity_wrapper->value());
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

  /**
   * Retrieves field_news_image
   *
   * @return mixed
   */
  public function getNewsImage() {
    return $this->get('field_news_image');
  }

  /**
   * Sets field_news_image
   *
   * @param $value
   *
   * @return $this
   */
  public function setNewsImage($value) {
    $this->set('field_news_image', $value);
    return $this;
  }

}
