<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = ['id'];



    public function getIconPathAttribute()
    {
        $icon = Service::where('id', $this->id)->first()->icon;
        if (!$icon) {
            return asset('default.png');
        }
        return asset('uploads/services/' . $this->icon);
    }

    public function getImage1PathAttribute()
    {
        $image1 = Service::where('id', $this->id)->first()->image1;
        if (!$image1) {
            return asset('default.png');
        }
        return asset('uploads/services/' . $this->image1);
    }

    public function getImage2PathAttribute()
    {
        $image2 = Service::where('id', $this->id)->first()->image2;
        if (!$image2) {
            return asset('default.png');
        }
        return asset('uploads/services/' . $this->image2);
    }




//    public function admin()
//    {
//        return $this->belongsTo(Admin::class);
//    }
}
