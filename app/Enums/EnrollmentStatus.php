<?php

namespace App\Enums;

use Rexlabs\Enum\Enum;

class EnrollmentStatus extends Enum
{
  const PENDING = 'pending';
  const APPROVED = 'approved';
  const CANCELLED = 'cancelled';
  const DROPPPED = 'dropped';

  /** Retrieve a map of enum keys and values. */
  public static function map() : array {
    return [
      static::PENDING => 'Pending',
      static::APPROVED => 'Approved',
      static::CANCELLED => 'Cancelled',
      static::DROPPPED => 'Dropped',
    ];
  }
}
