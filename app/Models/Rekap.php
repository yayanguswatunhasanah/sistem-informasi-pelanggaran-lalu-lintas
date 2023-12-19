<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'rekap';
    protected $guarded = ['id'];
}
