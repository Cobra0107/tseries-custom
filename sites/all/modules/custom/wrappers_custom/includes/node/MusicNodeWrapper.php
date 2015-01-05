<?php
/**
 * @file
 * class MusicNodeWrapper
 */

class MusicNodeWrapper extends WdNodeWrapper {

  private static $bundle = 'music';

  /**
   * Create a new music node.
   *
   * @param array $values
   * @param string $language
   * @return MusicNodeWrapper
   */
  public static function create($values = array(), $language = LANGUAGE_NONE) {
    $values += array('bundle' => self::$bundle);
    $entity_wrapper = parent::create($values, $language);
    return new MusicNodeWrapper($entity_wrapper->value());
  }

  /**
   * Retrieves field_singer_s
   *
   * @return mixed
   */
  public function getSingerS() {
    return $this->get('field_singer_s');
  }

  /**
   * Sets field_singer_s
   *
   * @param $value
   *
   * @return $this
   */
  public function setSingerS($value) {
    $this->set('field_singer_s', $value);
    return $this;
  }

  /**
   * Retrieves field_audio
   *
   * @return mixed
   */
  public function getAudio() {
    return $this->get('field_audio');
  }

  /**
   * Sets field_audio
   *
   * @param $value
   *
   * @return $this
   */
  public function setAudio($value) {
    $this->set('field_audio', $value);
    return $this;
  }

  /**
   * Retrieves field_video
   *
   * @return mixed
   */
  public function getVideo() {
    return $this->get('field_video');
  }

  /**
   * Sets field_video
   *
   * @param $value
   *
   * @return $this
   */
  public function setVideo($value) {
    $this->set('field_video', $value);
    return $this;
  }

  /**
   * Retrieves field_movie
   *
   * @return MoviesNodeWrapper
   */
  public function getMovie() {
    $value = $this->get('field_movie');
    if (!empty($value)) {
      $value = new MoviesNodeWrapper($value);
    }
    return $value;
  }

  /**
   * Sets field_movie
   *
   * @param $value
   *
   * @return $this
   */
  public function setMovie($value) {
    if (is_array($value)) {
      foreach ($value as $i => $v) {
        if ($v instanceof WdNodeWrapper) {
          $value[$i] = $v->value();
        }
      }
    }
    else {
      if ($value instanceof WdNodeWrapper) {
        $value = $value->value();
      }
    }

    $this->set('field_movie', $value);
    return $this;
  }

}
