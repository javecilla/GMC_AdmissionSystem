<?php

namespace App\Enums;

use Rexlabs\Enum\Enum;

class Strand extends Enum
{
  const STEM = 'Science, Technology Engineering and Mathematics';
  const ABM = 'Accountancy, Business and Management';
  const HUMSS = 'Humanities and Social Sciences';
  const GAS = 'General Academic Strand';
  const TVL_HE = 'Technical-Vocational-Livelihood Home Economics';
  const TVL_ICT = 'Technical-Vocational-Livelihood Information and Communications Technology';

  /** Retrieve a map of enum keys and values. */
  public static function map() : array {
    return [
      static::STEM => 'STEM',
      static::ABM => 'ABM',
      static::HUMSS => 'HUMSS',
      static::GAS => 'GAS',
      static::TVL_HE => 'HE',
      static::TVL_ICT => 'ICT',
    ];
  }
}
