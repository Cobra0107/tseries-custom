<?php
/**
 * @file
 * class MoviesNodeWrapper
 */

class MoviesNodeWrapper extends WdNodeWrapper {

  private static $bundle = 'movies';

  /**
   * Create a new movies node.
   *
   * @param array $values
   * @param string $language
   * @return MoviesNodeWrapper
   */
  public static function create($values = array(), $language = LANGUAGE_NONE) {
    $values += array('bundle' => self::$bundle);
    $entity_wrapper = parent::create($values, $language);
    return new MoviesNodeWrapper($entity_wrapper->value());
  }

  /**
   * Retrieves field_poster
   *
   * @return mixed
   */
  public function getPoster() {
    return $this->get('field_poster');
  }

  /**
   * Sets field_poster
   *
   * @param $value
   *
   * @return $this
   */
  public function setPoster($value) {
    $this->set('field_poster', $value);
    return $this;
  }

  /**
   * Retrieves field_starcast
   *
   * @return mixed
   */
  public function getStarcast() {
    return $this->get('field_starcast');
  }

  /**
   * Sets field_starcast
   *
   * @param $value
   *
   * @return $this
   */
  public function setStarcast($value) {
    $this->set('field_starcast', $value);
    return $this;
  }

  /**
   * Retrieves field_director
   *
   * @return mixed
   */
  public function getDirector() {
    return $this->get('field_director');
  }

  /**
   * Sets field_director
   *
   * @param $value
   *
   * @return $this
   */
  public function setDirector($value) {
    $this->set('field_director', $value);
    return $this;
  }

  /**
   * Retrieves field_release_year
   *
   * @return mixed
   */
  public function getReleaseYear() {
    return $this->get('field_release_year');
  }

  /**
   * Sets field_release_year
   *
   * @param $value
   *
   * @return $this
   */
  public function setReleaseYear($value) {
    $this->set('field_release_year', $value);
    return $this;
  }

  /**
   * Retrieves field_music_director
   *
   * @return mixed
   */
  public function getMusicDirector() {
    return $this->get('field_music_director');
  }

  /**
   * Sets field_music_director
   *
   * @param $value
   *
   * @return $this
   */
  public function setMusicDirector($value) {
    $this->set('field_music_director', $value);
    return $this;
  }

  /**
   * Retrieves field_category
   *
   * @return mixed
   */
  public function getCategory() {
    return $this->get('field_category');
  }

  /**
   * Sets field_category
   *
   * @param $value
   *
   * @return $this
   */
  public function setCategory($value) {
    $this->set('field_category', $value);
    return $this;
  }

}
