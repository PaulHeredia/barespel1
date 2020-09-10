<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Reporte extends Model
{
    //
    use SoftDeletes;
    protected $guarded = [];
    public function buzon()
    {
    return $this->belongsTo(Buzon::class);
    }
    public function referencias()
    {
    return $this->belongsTo(Referencias::class);
    }
}
