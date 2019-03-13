<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Abs extends Model
{
   protected $fillable = ['name','comment']; // 追記したところ
}
