<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'title',
        'filename',
        'name',
        'personality',
        'country',
        'score',
        'wins',
        'losses',
        'rank',

    ];
}
