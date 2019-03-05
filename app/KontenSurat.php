<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KontenSurat extends Model
{
    //"$table" pengenalan table
    protected $table = 'konten_surats';

    //"$primaryKey" kolom pengenalan primary key tabel
    protected $primaryKey = 'id';

    //"$guarded" kolom yang tidak dapat diisi secara manual
    protected $guarded = ['id'];

    public function isiSurat(){
        return $this->belongsTo(IsiSurat::class, 'isi_id');
    }
}
