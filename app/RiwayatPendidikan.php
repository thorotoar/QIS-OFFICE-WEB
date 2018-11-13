<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    //"$table" pengenalan table
    protected $table = 'riwayat_pendidikans';

    //"$primaryKey" kolom pengenalan primary key tabel
    protected $primaryKey = 'id';

    //"$guarded" kolom yang tidak dapat diisi secara manual
    protected $guarded = ['id'];

    public function pegawai(){
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }

    public function jenjang(){
        return $this->belongsTo(Jenjang::class, 'jenjang_id');
    }

    public function jurusan(){
        return $this->belongsTo(JurusanPendidikan::class, 'jurusan_id');
    }
}
