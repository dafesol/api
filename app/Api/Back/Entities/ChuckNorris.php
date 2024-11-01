<?php

namespace App\Api\Back\Entities;

use Illuminate\Database\Eloquent\Model;

class ChuckNorris extends Model
{
    const TABLE = 'chuck_norris_random';

    const ID = 'id';
    const VALUE = 'value';
    const URL = 'url';
    const ICON_URL = 'icon_url';
    const CATEGORIES = 'categories';

    protected $table = self::TABLE;
    protected $fillable = [
        self::VALUE,
        self::URL,
        self::ICON_URL,
        self::CATEGORIES,
    ];
}
