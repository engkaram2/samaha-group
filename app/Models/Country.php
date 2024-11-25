<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function getImagePathAttribute()
    {
        $image = Country::where('id', $this->id)->first()->image;
        if (!$image) {
            return asset('default.png');
        }
        return asset('uploads/countries/' . $this->image);
    }
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
