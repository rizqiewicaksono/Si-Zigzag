<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    protected $fillable = ['usia','berat_badan','tinggi_badan','nilai_gizi','hasil_gizi','saran'];
}
