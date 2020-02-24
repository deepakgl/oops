<?php

namespace Drupal\oops\Utility;

/**
 * Purpose of this class is to build common object.
 */
class Teacher {
  /**
   * Teacher.
   *
   * @var teacher
   */
  private $teacher = NULL;

  /**
   * Subject Teacher.
   *
   * @var subject_teacher
   */
  private $subjectTeacher = NULL;

  /**
   * Create a new controller instance.
   */
  public function __construct() {
    $this->teacher = [];
    $this->subjectTeacher = [];
  }

  /**
   * Get all teacher in a school.
   */
  public function getAllTeacherBySchoolName($schoolName) {
    try {
      $this->teacher = db_select('teacher', 't')
        ->fields('t', ['id', 'name', 'role'])
        ->condition('t.school_name', $schoolName, '=')
        ->execute()->fetchAll();

      return $this->teacher;
    }
    catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  /**
   * Get all teacher in a school.
   */
  public function getAllTeacherByRole($role) {
    try {
      $this->subjectTeacher = db_select('teacher', 't')
        ->fields('t', ['id', 'name', 'role'])
        ->condition('t.school_name', $role, '=')
        ->execute()->fetchAll();

      return $this->subjectTeacher;
    }
    catch (\Exception $e) {
      return $e->getMessage();
    }
  }

}
