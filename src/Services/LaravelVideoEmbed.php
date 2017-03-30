<?php

namespace Merujan99\LaravelVideoEmbed\Services;

use MediaEmbed\MediaEmbed;

class LaravelVideoEmbed
{
  public function parse($url = null, $whitelist = [], $params = [], $attributes = []) {

    $MediaEmbed = new MediaEmbed();

    $MediaObject = $MediaEmbed->parseUrl($url);

    if ($MediaObject)
    {

      if(is_array($params))
      {
        $MediaObject->setParam($params);
      }

      if(is_array($params))
      {
        $MediaObject->setAttribute($attributes);
      }


      if (!empty($whitelist))
      {

        if(!in_array($MediaObject->name(), $whitelist))
        {

          return false;

        }

      }

      return $MediaObject;

    }

    return false;

  }

  public function getYoutubeThumbnail($url = null)
  {
      $MediaEmbed = new MediaEmbed();

      $MediaObject = $MediaEmbed->parseUrl($url);

      if($MediaObject)
      {
          return "https://img.youtube.com/vi/{$MediaObject->id()}/maxresdefault.jpg";
      }

      return false;
  }

}
