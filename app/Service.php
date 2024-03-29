<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'created_by'
    ];

    public function user() {
        return $this->belongsTo(User::class,'created_by','id');
    }
}
