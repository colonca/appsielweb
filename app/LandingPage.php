<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    protected $fillable = ['nombre','correo'];
    protected $table = 'landing_page';
}
