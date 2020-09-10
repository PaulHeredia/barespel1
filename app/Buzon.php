<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Buzon extends Model
{
    //
    use SoftDeletes;
    protected $guarded = [];
    public function bar()
    {
    return $this->belongsTo(Bar::class);
    }

    public function reporte()
    {
    return $this->hasMany(Reporte::class);
    }
}
