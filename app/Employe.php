<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    protected $table = 'employes';

    protected $primaryKey = 'id_employe';

    protected $fillable = ['nama','email','id_company'];

    public function company()
    {
        return $this->hasOne(Company::class,'id_company', 'id_company');
    }
}


