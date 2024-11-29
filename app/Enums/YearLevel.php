<?php

namespace App\Enums;

use Rexlabs\Enum\Enum;

class YearLevel extends Enum
{
  const GRADE_ELEVEN = '11';
  const GRADE_TWELVE = '12';

  /** Retrieve a map of enum keys and values. */
  public static function map() : array {
    return [
      static::GRADE_ELEVEN => '11',
      static::GRADE_TWELVE => '12',
    ];
  }
}
