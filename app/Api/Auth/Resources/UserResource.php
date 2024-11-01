<?php

namespace App\Api\Auth\Resources;

use App\Models\User;

class UserResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->{User::ID},
            'name' => $this->{User::NAME},
            'email' => $this->{User::EMAIL},
            'email_verified_at' => $this->{User::EMAIL_VERIFIED_AT},
            'created_at' => $this->{User::CREATED_AT},
            'updated_at' => $this->{User::UPDATED_AT},
        ];
    }

}
