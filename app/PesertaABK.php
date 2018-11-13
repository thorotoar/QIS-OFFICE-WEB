<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesertaABK extends Model
{
    //"$table" pengenalan table
    protected $table = 'peserta_a_b_ks';

    //"$primaryKey" kolom pengenalan primary key tabel
    protected $primaryKey = 'id';

    //"$guarded" kolom yang tidak dapat diisi secara manual
    protected $guarded = ['id'];

    public function lembaga_abk()
    {
        return $this->belongsTo(Lembaga::class, 'lembaga_id');
    }
}
