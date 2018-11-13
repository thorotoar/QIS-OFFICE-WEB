<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    //"$table" pengenalan table
    protected $table = 'kurikulums';

    //"$primaryKey" kolom pengenalan primary key tabel
    protected $primaryKey = 'id';

    //"$guarded" kolom yang tidak dapat diisi secara manual
    protected $guarded = ['id'];

    public function lembaga_k(){
        return $this->belongsTo(Lembaga::class, 'lembaga_id');
    }
}
