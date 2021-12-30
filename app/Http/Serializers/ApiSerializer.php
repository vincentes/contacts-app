<?php

namespace App\Http\Serializers;

use League\Fractal\Serializer\ArraySerializer;

class ApiSerializer extends ArraySerializer
{
  public function collection($resourceKey, array $data)
    {
      if ($resourceKey) {
        return [$resourceKey => $data];
      }
      return $data;
    }
    
    public function item($resourceKey, array $data)
    {
      if ($resourceKey) {
        return [$resourceKey => $data];
      }
      return $data;
    }

    public function null()
    {
        return [];
    }
}
