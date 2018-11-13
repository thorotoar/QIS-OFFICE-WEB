<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesertaDC extends Model
{
    //"$table" pengenalan table
    protected $table = 'peserta_d_cs';

    //"$primaryKey" kolom pengenalan primary key tabel
    protected $primaryKey = 'id';

    //"$guarded" kolom yang tidak dapat diisi secara manual
    protected $guarded = ['id'];

    public function lembaga_dc()
    {
        return $this->belongsTo(Lembaga::class, 'lembaga_id');
    }
}
