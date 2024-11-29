<?php

namespace App\Enums;

use Rexlabs\Enum\Enum;

class LearningMode extends Enum
{
  const FACE_TO_FACE = 'face to face';
  const MODULAR = 'modular';
  const ONLINE = 'online';

  /** Retrieve a map of enum keys and values. */
  public static function map() : array {
    return [
      static::FACE_TO_FACE => 'Face to Face',
      static::MODULAR => 'Modular',
      static::ONLINE => 'Online',
    ];
  }
}
