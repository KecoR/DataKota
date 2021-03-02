<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datakota extends Model
{
    protected $table = 'data_kota';
    protected $primaryKey = 'IDKota';
    public $timestamps = false;
}
