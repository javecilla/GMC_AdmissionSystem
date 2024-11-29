<?php

namespace App\Enums;

use Rexlabs\Enum\Enum;

class EntryQualification extends Enum
{
  const REGULAR = 'regular';
  const TRANSFEREES = 'transferees';
  const ALS = 'als';

  /** Retrieve a map of enum keys and values. */
  public static function map() : array {
    return [
      static::REGULAR => 'Regular',
      static::TRANSFEREES => 'Transferees',
      static::ALS => 'ALS',
    ];
  }
}
