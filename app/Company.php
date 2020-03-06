<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table = 'companies';

    protected $fillable = ['nama','email','logo','website'];

    public function employe()
    {
        return $this->hasOne('App\Phone');
    }

}
