<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'name',
        'tag',
        'url',
        'icon_menu',
        'show_in_menu'
    ];
}
