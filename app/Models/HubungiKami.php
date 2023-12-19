<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HubungiKami extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'hubungi_kami';
    protected $guarded = ['id'];
}
