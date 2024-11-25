<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }


//    public function admin()
//    {
//        return $this->belongsTo(Admin::class);
//    }
}
