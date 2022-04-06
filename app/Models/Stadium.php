<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    use HasFactory;

    // properties can be filled
    protected $fillable = [
      'name', 'capacity', 'location', 'slug'
    ];

    // to build better URLs
    public function getRouteKeyName() {
      return 'slug';
    }
}
