<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    //"$table" pengenalan table
    protected $table = 'lembagas';

    //"$primaryKey" kolom pengenalan primary key tabel
    protected $primaryKey = 'id';

    //"$guarded" kolom yang tidak dapat diisi secara manual
    protected $guarded = ['id'];

    public function p_qis()
    {
        return $this->hasMany(PesertaQIS::class);
    }

    public function p_dc()
    {
        return $this->hasMany(PesertaDC::class);
    }

    public function p_abk()
    {
        return $this->hasMany(PesertaABK::class);
    }

    public function l_kurikulum()
    {
        return $this->hasMany(Kurikulum::class);
    }
}
