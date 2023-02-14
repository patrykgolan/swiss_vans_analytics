<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneCall extends Model
{
    protected $fillable = [
      'from',
      'to',
      'date',
    ];
}
