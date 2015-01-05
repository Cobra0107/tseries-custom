<?php
/**
 * @file
 * class ArticleNodeWrapper
 */

class ArticleNodeWrapper extends WdNodeWrapper {

  private static $bundle = 'article';

  /**
   * Create a new article node.
   *
   * @param array $values
   * @param string $language
   * @return ArticleNodeWrapper
   */
  public static function create($values = array(), $language = LANGUAGE_NONE) {
    $values += array('bundle' => self::$bundle);
    $entity_wrapper = parent::create($values, $language);
    return new ArticleNodeWrapper($entity_wrapper->value());
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
   * Retrieves field_tags
   *
   * @return mixed
   */
  public function getTags() {
    return $this->get('field_tags');
  }

  /**
   * Sets field_tags
   *
   * @param $value
   *
   * @return $this
   */
  public function setTags($value) {
    $this->set('field_tags', $value);
    return $this;
  }

  /**
   * Retrieves field_image
   *
   * @return mixed
   */
  public function getImage() {
    return $this->get('field_image');
  }

  /**
   * Sets field_image
   *
   * @param $value
   *
   * @return $this
   */
  public function setImage($value) {
    $this->set('field_image', $value);
    return $this;
  }

  /**
   * Retrieves field_image as a URL
   *
   * @param string $image_style
   *   (optional) Image style for the URL
   * @param bool $absolute
   *   Whether to return an absolute URL or not
   *
   * @return string
   */
  public function getImageUrl($image_style = NULL, $absolute = FALSE) {
    $image = $this->get('field_image');
    if (!empty($image)) {
      if (!is_null($image_style)) {
        return url(image_style_path($image_style, $image['uri']), array('absolute' => $absolute));
      }
      else {
        return url(file_create_url($image['uri']), array('absolute' => $absolute));
      }
    }
    return NULL;
  }


  /**
   * Retrieves field_image as an HTML <img> tag
   *
   * @param string $image_style
   *   (optional) Image style for the HTML
   * @param array $attributes
   *   IMG tag attributes
   *
   * @return string
   */
  public function getImageHtml($image_style = NULL, $attributes = array()) {
    $image = $this->get('field_image');
    if (!empty($image)) {
      if (!is_null($image_style)) {
        return theme('image_style', array('path' => $image['uri'], 'style_name' => $image_style, 'attributes' => $attributes));
      }
      else {
        return theme('image_style', array('path' => $image['uri'], 'attributes' => $attributes));
      }
    }
    return NULL;
  }


}
