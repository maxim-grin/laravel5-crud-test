<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model {

    protected $fillable = ['name', 'price', 'status'];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
