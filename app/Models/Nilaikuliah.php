<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilaikuliah extends Model
{
    protected $table = 'nilaikuliah';
    public $timestamps = false;
    protected $fillable = ['NRP', 'NilaiAngka', 'SKS'];
}
