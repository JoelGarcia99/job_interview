<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DT extends Model
{
    use HasFactory;

    protected $fillabel = [
      'name', 'born_date'
    ];

    public function getRouteKeyName() {
      return 'slug';
    }
}
