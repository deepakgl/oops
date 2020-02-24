<?php

namespace Drupal\oops\Utility;

/**
 * Purpose of this class is to build common object.
 */
class School {
  /**
   * School name.
   *
   * @var school
   */
  private $name = NULL;

  /**
   * Create a new controller instance.
   */
  public function __construct() {
    $this->name = [];
  }

  /**
   * Get all school name.
   */
  public function getAllSchool() {
    try {
      $this->name = db_select('school', 's')
        ->fields('s', ['id', 'name'])
        ->execute()->fetchAll();

      return $this->name;
    }
    catch (\Exception $e) {
      return $e->getMessage();
    }
  }

}
