<?php

namespace App\Api\Back\Resources;

use App\Api\Back\Entities\ChuckNorris;
use Illuminate\Http\Resources\Json\JsonResource;

class ChuckNorrisResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->{ChuckNorris::ID},
            'value' => $this->{ChuckNorris::VALUE},
            'url' => $this->{ChuckNorris::URL},
            'icon_url' => $this->{ChuckNorris::ICON_URL},
            'categories' => $this->{ChuckNorris::CATEGORIES},
            'created_at' => $this->{ChuckNorris::CREATED_AT}->format('Y-m-d H:i:s'),
            'updated_at' => $this->{ChuckNorris::UPDATED_AT}->format('Y-m-d H:i:s'),
        ];
    }
}
