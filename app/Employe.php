<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    protected $table = 'employes';

    protected $fillable = ['id_company','email','logo'];

    public function company()
    {
        return $this->hasOne('App\Company');
    }
}
