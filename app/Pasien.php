<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{ 
	protected $primaryKey = ['id'];
	protected $fillable = ['nama_pasien','jenis_kelamin','alamat_pasien','orangtua_pasien','no_hp','usia','berat_badan','tinggi_badan','nilai_gizi','hasil_gizi','saran','nib'];
	public $timestamps = true;
}
