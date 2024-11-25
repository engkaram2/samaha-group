<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function getImagePathAttribute()
    {
        $image = AboutSection::where('id', $this->id)->first()->image;
        if (!$image) {
            return asset('default.png');
        }
        return asset('uploads/sections/' . $this->image);
    }
}
