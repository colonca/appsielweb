<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = ['id', 'description', 'image', 'url', 'show', 'created_at', 'updated_at'];
}
