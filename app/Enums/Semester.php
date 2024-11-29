<?php

namespace App\Enums;

use Rexlabs\Enum\Enum;

class Semester extends Enum
{
  const FIRST_SEMESTER = '1st';
  const SECOND_SEMESTER = '2nd';

  /** Retrieve a map of enum keys and values. */
  public static function map() : array {
    return [
      static::FIRST_SEMESTER => '1st',
      static::SECOND_SEMESTER => '2nd',
    ];
  }
}
