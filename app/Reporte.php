<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    //
    public function buzon()
    {
    return $this->belongsTo(Buzon::class);
    }
    public function referencias()
    {
    return $this->belongsTo(Referencias::class);
    }
}
