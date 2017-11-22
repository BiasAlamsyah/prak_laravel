<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
  protected $table = 'uploads';

  public $fillable = ['name', 'sinopsis', 'date', 'image'];
}
