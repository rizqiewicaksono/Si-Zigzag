<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\Periksa;
use DB;
class pasienController extends Controller
{


 public function uRingan($berat,$jenkel){
      $nilaiKeanggotaan=0.0;

      if($jenkel=="L" || $jenkel=="l"){
        if($berat<=7){
            $nilaiKeanggotaan = 1;
        }
        else if($berat>7 && $berat<=13){
            $nilaiKeanggotaan = (13-$berat)/6;
        }
        else if($berat>13){
            $nilaiKeanggotaan = 0;
        }
    }
    else{
        if($berat<=7){
            $nilaiKeanggotaan = 1;
        }
        else if($berat>7 && $berat<=12){
            $nilaiKeanggotaan = (12-$berat)/5;
        }
        else if($berat>12){
            $nilaiKeanggotaan = 0;
        }
    }

    return $nilaiKeanggotaan;
} 


public function uSedang($berat,$jenkel){
    $nilaiKeanggotaan=0.0;
    if($jenkel=="L" || $jenkel == "l"){
        if($berat<=7){
            $nilaiKeanggotaan = 0;
        }
        else if($berat>7 && $berat<=13){
            $nilaiKeanggotaan = ($berat-7)/6;
        }
        else if($berat>13 && $berat<=19){
            $nilaiKeanggotaan = (19-$berat)/6;
        }
        else if($berat>19){
            $nilaiKeanggotaan = 0;
        }
    }
    else{
        if($berat<=7){
            $nilaiKeanggotaan = 0;
        }
        else if($berat>7 && $berat<=12){
            $nilaiKeanggotaan = ($berat-7)/5;
        }
        else if($berat>12 && $berat<=18){
            $nilaiKeanggotaan = (18-$berat)/6;
        }
        else if($berat>18){
            $nilaiKeanggotaan=0;
        }
    }

    return $nilaiKeanggotaan;
}


public function uBerat($berat,$jenkel){
    $nilaiKeanggotaan=0.0;
    if($jenkel=="L" || $jenkel=="l"){
        if($berat<=13){
            $nilaiKeanggotaan = 0;
        }
        else if($berat>13 && $berat<=19){
            $nilaiKeanggotaan = ($berat-13)/6;
        }
        else if($berat>19){
            $nilaiKeanggotaan = 1;
        }
    }
    else{
        if($berat<=12){
            $nilaiKeanggotaan = 0;
        }
        else if($berat>12 && $berat<=18){
            $nilaiKeanggotaan = ($berat-12)/6;
        }
        else if($berat>18){
            $nilaiKeanggotaan = 1;
        }
    }
    return $nilaiKeanggotaan;
}

public function uRendahT($tinggi,$jenkel){
    $nilaiKeanggotaan=0.0;
    if($jenkel == "L" || $jenkel=="L"){
        if($tinggi<=49){
            $nilaiKeanggotaan = 1;
        }
        else if($tinggi>=49 && $tinggi<=75){
            $nilaiKeanggotaan = (75-$tinggi)/26;
        }
        else if($tinggi>75){
            $nilaiKeanggotaan = 0;
        }
    }
    else{
        if($tinggi<=48){
            $nilaiKeanggotaan = 1;
        }
        else if($tinggi>=48 && $tinggi<=74){
            $nilaiKeanggotaan = (74-$tinggi)/26;
        }
        else if($tinggi>74){
            $nilaiKeanggotaan = 0;
        }
    }
    return $nilaiKeanggotaan;
}

public function uSedangT($tinggi,$jenkel){
    $nilaiKeanggotaan=0.0;
    if($jenkel == "L" || $jenkel=="L"){
        if($tinggi<=49){
            $nilaiKeanggotaan = 0;
        }
        else if($tinggi>=49 && $tinggi<=75){
            $nilaiKeanggotaan = ($tinggi-49)/26;
        }
        else if($tinggi>75 && $tinggi<=101){
            $nilaiKeanggotaan = (101-$tinggi)/26;
        }
        else if($tinggi>101){
            $nilaiKeanggotaan = 0;
        }
    }
    else{
        if($tinggi<=48){
            $nilaiKeanggotaan = 0;
        }
        else if($tinggi>=48 && $tinggi<=74){
            $nilaiKeanggotaan = ($tinggi-48)/26;
        }
        else if($tinggi>74 && $tinggi<=100){
            $nilaiKeanggotaan = (100-$tinggi)/26;
        }
        else if($tinggi>100){
            $nilaiKeanggotaan = 0;
        }
    }
    return $nilaiKeanggotaan;
}


public function uTinggiT($tinggi,$jenkel){
    $nilaiKeanggotaan=0.0;
    if($jenkel == "L" || $jenkel=="L"){
        if($tinggi<=75){
            $nilaiKeanggotaan = 0;
        }
        else if($tinggi>=75 && $tinggi<=101){
            $nilaiKeanggotaan = ($tinggi-75)/26;
        }
        else if($tinggi>101){
            $nilaiKeanggotaan =1;
        }
    }
    else{
        if($tinggi<=74){
            $nilaiKeanggotaan = 0;
        }
        else if($tinggi>=74 && $tinggi<=100){
            $nilaiKeanggotaan = ($tinggi-74)/26;
        }
        else if($tinggi>100){
            $nilaiKeanggotaan =1;
        }
    }
    return $nilaiKeanggotaan;
}


public function uFASE1($umur){
    $nilaiKeanggotaan=0.0;
    if($umur <= 6){
        $nilaiKeanggotaan = 1;
    }
    else if($umur>=6 && $umur <=12){
        $nilaiKeanggotaan = (12-$umur)/6;
    }
    else if($umur>12){
        $nilaiKeanggotaan = 0;
    }
    return $nilaiKeanggotaan;
}


public function uFASE2($umur){
    $nilaiKeanggotaan=0.0;
    if($umur <= 6){
        $nilaiKeanggotaan = 0;
    }
    else if($umur>=6 && $umur <=12){
        $nilaiKeanggotaan = ($umur-7)/6;
    }
    else if($umur>12 && $umur<=24){
        $nilaiKeanggotaan = (24-$umur)/12;
    }
    return $nilaiKeanggotaan;
}

public function uFASE3($umur){
    $nilaiKeanggotaan=0.0;
    if($umur <= 12){
        $nilaiKeanggotaan = 0;
    }
    else if($umur>=12 && $umur <=24){
        $nilaiKeanggotaan = ($umur-12)/12;
    }
    else if($umur>24 && $umur<=36){
        $nilaiKeanggotaan = (36-$umur)/12;
    }
    return $nilaiKeanggotaan;
}

public function uFASE4($umur){
    $nilaiKeanggotaan=0.0;
    if($umur <= 24){
        $nilaiKeanggotaan = 0;
    }
    else if($umur>=24 && $umur <=36){
        $nilaiKeanggotaan = ($umur-24)/12;
    }
    else if($umur>36 && $umur<=48){
        $nilaiKeanggotaan = (48-$umur)/12;
    }
    return $nilaiKeanggotaan;
}

public function uFASE5($umur){
    $nilaiKeanggotaan=0.0;
    if($umur <= 36){
        $nilaiKeanggotaan = 0;
    }
    else if($umur>=36 && $umur <=48){
        $nilaiKeanggotaan = ($umur-36)/12;
    }
    else if($umur>48){
        $nilaiKeanggotaan = 1;
    }
    return $nilaiKeanggotaan;
}

public function uGiziBuruk($alfa){ 
    if($alfa==1){
        return 43;
    }
    else if($alfa==0){
        return 49;
    }
    else{
        return 49 - (6*$alfa);
    }
}

public function uGiziKurang($alfa){ 
    if($alfa==0){
        return 43;
    }
    else{
        return 43 + (6*$alfa);
    }
}

public function uGiziNormal($alfa){ 
    if($alfa==0){
        return 49;
    }
    else{
        return 49 + (4*$alfa);
    }
}

public function uGiziLebih($alfa){ 
    if($alfa==0){
        return 53;
    }
    else{
        return 53 + (29*$alfa);
    }
}

public function uGiziObesitas($alfa){ 
    if($alfa==0){
        return 70;
    }
    else{
        return 70 + (12*$alfa);
    }
}
public function aturan($umur,$berat,$tinggi,$jenkel){
    $alfa= array();
    $z = array();
    $hasil = array();
    $nilaiSementara = array();
    $NilaiGizi=0.0;
    $totalNilaiSementara=0.0;
    $totalAlfa=0.0;
    $hasilGizi="";
    $saranGizi="";

    $alfa[0] = min($this->uFASE1($umur),min($this->uRingan($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[1] = min($this->uFASE1($umur),min($this->uRingan($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[2] = min($this->uFASE1($umur),min($this->uRingan($berat,$jenkel),$this->uTinggiT($tinggi,$jenkel)));
    $alfa[3] = min($this->uFASE1($umur),min($this->uSedang($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[4] = min($this->uFASE1($umur),min($this->uSedang($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[5] = min($this->uFASE1($umur),min($this->uSedang($berat,$jenkel),$this->uTinggiT($tinggi,$jenkel)));
    $alfa[6] = min($this->uFASE1($umur),min($this->uBerat($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[7] = min($this->uFASE1($umur),min($this->uBerat($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[8] = min($this->uFASE1($umur),min($this->uBerat($berat,$jenkel),$this->uTinggiT($tinggi,$jenkel)));
    $alfa[9] = min($this->uFASE2($umur),min($this->uRingan($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[10] = min($this->uFASE2($umur),min($this->uRingan($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[11] = min($this->uFASE2($umur),min($this->uRingan($berat,$jenkel),$this->uTinggiT($tinggi,$jenkel)));
    $alfa[12] = min($this->uFASE2($umur),min($this->uSedang($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[13] = min($this->uFASE2($umur),min($this->uSedang($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[14] = min($this->uFASE2($umur),min($this->uSedang($berat,$jenkel),$this->uTinggiT($tinggi,$jenkel)));
    $alfa[15] = min($this->uFASE2($umur),min($this->uBerat($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[16] = min($this->uFASE2($umur),min($this->uBerat($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[17] = min($this->uFASE2($umur),min($this->uBerat($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[18] = min($this->uFASE3($umur),min($this->uRingan($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[19] = min($this->uFASE3($umur),min($this->uRingan($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[20] = min($this->uFASE3($umur),min($this->uRingan($berat,$jenkel),$this->uTinggiT($tinggi,$jenkel)));
    $alfa[21] = min($this->uFASE3($umur),min($this->uSedang($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[22] = min($this->uFASE3($umur),min($this->uSedang($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[23] = min($this->uFASE3($umur),min($this->uSedang($berat,$jenkel),$this->uTinggiT($tinggi,$jenkel)));
    $alfa[24] = min($this->uFASE3($umur),min($this->uBerat($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[25] = min($this->uFASE3($umur),min($this->uBerat($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[26] = min($this->uFASE3($umur),min($this->uBerat($berat,$jenkel),$this->uTinggiT($tinggi,$jenkel)));
    $alfa[27] = min($this->uFASE4($umur),min($this->uRingan($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[28] = min($this->uFASE4($umur),min($this->uRingan($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[29] = min($this->uFASE4($umur),min($this->uRingan($berat,$jenkel),$this->uTinggiT($tinggi,$jenkel)));
    $alfa[30] = min($this->uFASE4($umur),min($this->uSedang($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[31] = min($this->uFASE4($umur),min($this->uSedang($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[32] = min($this->uFASE4($umur),min($this->uSedang($berat,$jenkel),$this->uTinggiT($tinggi,$jenkel)));
    $alfa[33] = min($this->uFASE4($umur),min($this->uBerat($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[34] = min($this->uFASE4($umur),min($this->uBerat($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[35] = min($this->uFASE4($umur),min($this->uBerat($berat,$jenkel),$this->uTinggiT($tinggi,$jenkel)));
    $alfa[36] = min($this->uFASE5($umur),min($this->uRingan($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[37] = min($this->uFASE5($umur),min($this->uRingan($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[38] = min($this->uFASE5($umur),min($this->uRingan($berat,$jenkel),$this->uTinggiT($tinggi,$jenkel)));
    $alfa[39] = min($this->uFASE5($umur),min($this->uSedang($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[40] = min($this->uFASE5($umur),min($this->uSedang($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[41] = min($this->uFASE5($umur),min($this->uSedang($berat,$jenkel),$this->uTinggiT($tinggi,$jenkel)));
    $alfa[42] = min($this->uFASE5($umur),min($this->uBerat($berat,$jenkel),$this->uRendahT($tinggi,$jenkel)));
    $alfa[43] = min($this->uFASE5($umur),min($this->uBerat($berat,$jenkel),$this->uSedangT($tinggi,$jenkel)));
    $alfa[44] = min($this->uFASE5($umur),min($this->uBerat($berat,$jenkel),$this->uTinggiT($tinggi,$jenkel)));

    $hasil[0]="normal";
    $hasil[1]="normal";
    $hasil[2]="kurang";
    $hasil[3]="lebih";
    $hasil[4]="lebih";
    $hasil[5]="lebih";
    $hasil[6]="lebih";
    $hasil[7]="lebih";
    $hasil[8]="obesitas";
    $hasil[9]="kurang";
    $hasil[10]="kurang";
    $hasil[11]="kurang";
    $hasil[12]="normal";
    $hasil[13]="normal";
    $hasil[14]="normal";
    $hasil[15]="lebih";
    $hasil[16]="lebih";
    $hasil[17]="obesitas";
    $hasil[18]="buruk";
    $hasil[19]="buruk";
    $hasil[20]="buruk";
    $hasil[21]="normal";
    $hasil[22]="normal";
    $hasil[23]="normal";
    $hasil[24]="lebih";
    $hasil[25]="lebih";
    $hasil[26]="obesitas";
    $hasil[27]="kurang";
    $hasil[28]="kurang";
    $hasil[29]="kurang";
    $hasil[30]="normal";
    $hasil[31]="normal";
    $hasil[32]="normal";
    $hasil[33]="lebih";
    $hasil[34]="lebih";
    $hasil[35]="normal";
    $hasil[36]="buruk";
    $hasil[37]="buruk";
    $hasil[38]="buruk";
    $hasil[39]="kurang";
    $hasil[40]="kurang";
    $hasil[41]="kurang";
    $hasil[42]="lebih";
    $hasil[43]="lebih";
    $hasil[44]="normal";
    for($i=0; $i<45; $i++){ 
        $totalAlfa= $totalAlfa+$alfa[$i];
        $alfaa = $alfa[$i];
        if($hasil[$i]=="buruk"){
            $z[$i] = $this->uGiziBuruk($alfaa);
        }
        else if($hasil[$i]=="kurang"){
            $z[$i] = $this->uGiziKurang($alfaa);
        }
        else if($hasil[$i]=="normal"){
            $z[$i] = $this->uGiziNormal($alfaa);
        }
        else if($hasil[$i]=="lebih"){
            $z[$i] = $this->uGiziLebih($alfaa);
        }
        else if($hasil[$i]=="obesitas"){
            $z[$i] = $this->uGiziObesitas($alfaa);
        }
                    // $hasilGizi = $hasil[$i];
    }
    for($i=0; $i<45; $i++){
        $nilaiSementara[$i] = $alfa[$i]*$z[$i];
        $totalNilaiSementara= $totalNilaiSementara+$nilaiSementara[$i];
    } 
    $NilaiGizi = $totalNilaiSementara/$totalAlfa; 

    if($NilaiGizi<45.5){
        $hasilGizi="buruk";
        $saranGizi="memberikan surat rujukan ke Puskesmas terdekat untuk mendapat penanganan lebih lanjut.";
    }
    else if($NilaiGizi<50.5){
        $hasilGizi="kurang";
        $saranGizi="memberikan buah dan sayur dalam tiap menu makanan dan makanan yang memiliki sumber karbohidrat, protein serta memberikan asupan vitamin dari susu atau produk lainnya.";
    }
    else if($NilaiGizi<61.5){
        $hasilGizi="normal";
        $saranGizi="memberikan saran untuk mempertahankan dan menjaga asupan yang diberikan kepada anak.";
    }
    else if($NilaiGizi<76.5){
        $hasilGizi="lebih";
        $saranGizi="memberikan saran untuk mengatur pola dan porsi makanan yang diberikan serta hindari makanan dengan kandungan kalori dan lemak yang tinggi.";
    }
    else if($NilaiGizi>=76.5){
        $hasilGizi="obesitas";
        $saranGizi="memberikan saran untuk menerapkan pola makan yang sehat dan seimbang, memberikan cemilan buah-buahan dan air putih, serta memperbanyak aktivitas fisik";
    }
    return ["nilaigizi"=>$NilaiGizi,"hasilgizi"=>$hasilGizi,"sarangizi"=>$saranGizi];


}


    public function index()
    {
        $pasiens = DB::table('pasiens')->get();;
        return view ('pasien/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasiens = DB::table('pasiens')->get();;
        return view('pasien/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
       $id = DB::table('pasiens')->orderBy('id','DESC')->first();
       
        $request -> validate([
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_pasien' => 'required',
            'orangtua_pasien' => 'required',
            'no_hp' => 'required',
            'nib'=> 'required'
        ]);  

        Pasien::insert([
            "nib"=>$request->nib,
            "nama_pasien"=>$request->nama_pasien,
            "jenis_kelamin"=>$request->jenis_kelamin,
            "alamat_pasien"=>$request->alamat_pasien,
            "orangtua_pasien"=>$request->orangtua_pasien,
            "no_hp"=>$request->no_hp,
        ]); 
        $id=$id->id+1;
        return redirect("/data/pasien");
    }


    public function periksa($id)
    {
        $pasiens =DB::table('pasiens')->where('id',$id)->first();
         return view('pasien/periksa',compact('pasiens'));
    }

    public function periksa_create(Request $request) 
    {
        date_default_timezone_set('Asia/Bangkok');
        $time = date("yy-m-d h:i:s");
        // dd($this->aturan($request->usia,$request->berat_badan,$request->tinggi_badan,$request->jenis_kelamin));
        $newNilaiGizi = $this->aturan($request->usia,$request->berat_badan,$request->tinggi_badan,$request->jenis_kelamin)['nilaigizi'];
 
        $newHasilGizi = $this->aturan($request->usia,$request->berat_badan,$request->tinggi_badan,$request->jenis_kelamin)['hasilgizi'];
        $newsaranGizi = $this->aturan($request->usia,$request->berat_badan,$request->tinggi_badan,$request->jenis_kelamin)['sarangizi'];
        
      
        Periksa::insert([
            "usia"=>$request->usia,
            "berat_badan"=>$request->berat_badan,
            "tinggi_badan"=>$request->tinggi_badan,
            "nilai_gizi"=>$newNilaiGizi,
            "hasil_gizi"=>$newHasilGizi,
            "saran"=>$newsaranGizi,
            "waktu_periksa"=>$time,
            "id_pasien"=>$request->id_pasien,
        ]);
        return redirect("/rekap");
    }


    public function data_pasien() 
    {
        $data_pasien = DB::table('pasiens')->paginate(10);
        return view('pasien/data_pasien',compact('data_pasien')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          // mengambil data pasien berdasarkan id yang dipilih
            $pasiens = DB::table('pasiens')->where('id',$id)->get();
            // passing data pasien yang didapat ke view edit.blade.php
            return view('pasien/profil',['pasiens' => $pasiens]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         DB::table('pasiens')->where('id',$request->id)->update([
                'nib'=>$request->nib,
                'nama_pasien' => $request->nama_pasien, 
                'jenis_kelamin' => $request->jenis_kelamin,
                'orangtua_pasien' => $request->orangtua_pasien,
                'no_hp' => $request->no_hp, 
                'usia' => $request->usia,
                'berat_badan' => $request->berat_badan,
                'tinggi_badan' => $request->tinggi_badan,
                'waktu_periksa' => $request->waktu_periksa,
                'nilai_gizi' => $request->nilai_gizi,
                'hasil_gizi' => $request->hasil_gizi,
                'saran' => $request->saran
            ]);
        // alihkan halaman ke halaman rekapan
            return redirect('/Pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
