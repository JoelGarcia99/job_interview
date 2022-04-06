<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillabel = [
      'slug', 'born_date', 'dorsal', 'position',
      'foot', 'name'
    ];

    public function getRouteKeyName() {
      return 'slug';
    }
}
