<?php

namespace Drupal\oops\Utility;

/**
 * Purpose of this class is to build common object.
 */
class Student {
  /**
   * School student.
   *
   * @var schoolStudent
   */
  private $schoolStudent = NULL;

  /**
   * Class student.
   *
   * @var classStudent
   */
  private $classStudent = NULL;

  /**
   * Subject student.
   *
   * @var subjectStudent
   */
  private $subjectStudent = NULL;

  /**
   * Create a new controller instance.
   */
  public function __construct() {
    $this->schoolStudent = [];
    $this->classStudent = [];
    $this->subjectStudent = [];
  }

  /**
   * Get all student in a school.
   */
  public function getAllStudentBySchoolName($schoolName) {
    try {
      $this->schoolStudent = db_select('student', 's')
        ->fields('s', ['id', 'name', 'class', 'school'])
        ->condition('s.school_name', $schoolName, '=')
        ->execute()->fetchAll();

      return $this->schoolStudent;
    }
    catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  /**
   * Get all student in a class.
   */
  public function getAllStudentByClass($class) {
    try {
      $this->classStudent = db_select('student', 's')
        ->fields('s', ['id', 'name', 'school'])
        ->condition('s.school_name', $class, '=')
        ->execute()->fetchAll();

      return $this->classStudent;
    }
    catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  /**
   * Get all student by subject name.
   */
  public function getAllStudentBySubject($subject) {
    try {
      $this->subjectStudent = db_select('student', 's')
        ->fields('s', ['id', 'name', 'school'])
        ->condition('s.school_name', $subject, '=')
        ->execute()->fetchAll();

      return $this->subjectStudent;
    }
    catch (\Exception $e) {
      return $e->getMessage();
    }
  }

}
