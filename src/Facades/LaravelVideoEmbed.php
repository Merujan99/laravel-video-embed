<?php

namespace Merujan99\LaravelVideoEmbed\Facades;

/**
* Class Facade
*/

use Illuminate\Support\Facades\Facade;

class LaravelVideoEmbed extends Facade
{
  /**
  * Get the registered name of the component.
  *
  * @return string
  */
  protected static function getFacadeAccessor()
  {
    return 'Merujan99\LaravelVideoEmbed\Services\LaravelVideoEmbed';
  }
}
