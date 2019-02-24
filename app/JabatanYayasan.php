<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JabatanYayasan extends Model
{
    //"$table" pengenalan table
    protected $table = 'jabatan_yayasans';

    //"$primaryKey" kolom pengenalan primary key tabel
    protected $primaryKey = 'id';

    //"$guarded" kolom yang tidak dapat diisi secara manual
    protected $guarded = ['id'];

    //protected $fillable = ['nama_jabatan'];

    public function py_jabatan()
    {
        return $this->hasMany(Pegawai::class);
    }
}
