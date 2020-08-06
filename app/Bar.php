<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Bar extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    public function site()
    {
    return $this->belongsTo(Site::class);
    }
    public function menu()
    {
    return $this->hasMany(Menu::class);
    }
    public function snack()
    {
    return $this->hasMany(Snack::class);
    }
}
