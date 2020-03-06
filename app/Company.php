<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table = 'companies';

    protected $primaryKey = 'id_company';

    protected $fillable = ['nama','email','logo','website'];

    // public function employe()
    // {
    //     return $this->hasOne(Employe::class);
    // }

}
