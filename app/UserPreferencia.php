<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserPreferencia extends Model
{
    //
    use SoftDeletes;
    protected $guarded = [];
    public function menu()
    {
    return $this->belongsTo(Menu::class);
    }
}
