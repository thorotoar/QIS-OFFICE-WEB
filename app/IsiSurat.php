<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IsiSurat extends Model
{
    //"$table" pengenalan table
    protected $table = 'isi_surats';

    //"$primaryKey" kolom pengenalan primary key tabel
    protected $primaryKey = 'id';

    //"$guarded" kolom yang tidak dapat diisi secara manual
    protected $guarded = ['id'];

    public function kontenSurat(){
        return $this->hasMany(KontenSurat::class);
    }

    public function pegawaiSurat(){
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }

    public function pesertaSurat(){
        return $this->belongsTo(PesertaDidik::class, 'peserta_id');
    }

    public function suratKeluar(){
        return $this->belongsTo(SuratKeluar::class, 'surat_keluar_id');
    }
}
