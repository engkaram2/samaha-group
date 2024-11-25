<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function office()
    {
        return $this->hasOne(Office::class);
    }

    public function offices()
    {
        return $this->hasMany(Office::class);
    }

}
