<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPlace extends Model
{
    use HasFactory;
    protected $fillable = ['area_id', 'name', "zip_code"];
    public $timestamps = false;
}
