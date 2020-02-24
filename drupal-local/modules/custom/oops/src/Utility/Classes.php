<?php

namespace Drupal\oops\Utility;

/**
 * Purpose of this class is to build common object.
 */
class Classes {
  /**
   * Class name.
   *
   * @var class
   */
  private $class = NULL;

  /**
   * Create a new controller instance.
   */
  public function __construct() {
    $this->class = [];
  }

  /**
   * Get all classes in a school by school name.
   */
  public function getAllClassesBySchoolName($schoolName) {
    try {
      $this->class = db_select('classes', 'c')
        ->fields('c', ['id', 'name'])
        ->condition('c.school_name', $schoolName, '=')
        ->execute()->fetchAll();

      return $this->class;
    }
    catch (\Exception $e) {
      return $e->getMessage();
    }
  }

}
