<?php

namespace App\Enums;

use Rexlabs\Enum\Enum;

class TuitionStatus extends Enum
{
  const VOUCHER_HOLDER = 'voucher holder';
  const TUITION_PAYER = 'tuition payer';

  /** Retrieve a map of enum keys and values. */
  public static function map() : array {
    return [
      static::VOUCHER_HOLDER => 'Voucher Holder',
      static::TUITION_PAYER => 'Tuition Payer',
    ];
  }
}
