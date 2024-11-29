<?php

namespace App\Enums;

use Rexlabs\Enum\Enum;

class UserRole extends Enum
{
  const ADMIN = 'admin';
  const COORDINATOR = 'coordinator';
  const TEACHER = 'teacher';
  const STUDENT = 'student';

  /** Retrieve a map of enum keys and values. */
  public static function map() : array {
    return [
      static::ADMIN => 'Admin',
      static::COORDINATOR => 'Coordinator',
      static::TEACHER => 'Teacher',
      static::STUDENT => 'Student',
    ];
  }
}
