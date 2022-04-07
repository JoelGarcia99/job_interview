<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Team extends Model
{
    use HasFactory;

    protected $fillable = [
      'color', 'location', 'name', 'slug'
    ];

    public function getRouteKeyName() {
      return 'slug';
    }

    protected function slug():Attribute {
      return new Attribute(
	set: function($value){
	  return Str::slug($value);
	}
      );
    }
}
