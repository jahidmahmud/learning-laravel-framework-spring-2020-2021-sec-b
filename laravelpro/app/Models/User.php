<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $table = null;
    // public $timestamps = false;
    //protected $primarykey = null;
    public $timestamps = false;
    //const CREATED_AT = null;
    //const UPDATED_AT = null;
}
