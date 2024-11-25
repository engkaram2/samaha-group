<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getClientImagePathAttribute()
    {
        $client_image = Review::where('id', $this->id)->first()->client_image;
        if (!$client_image) {
            return asset('default.png');
        }
        return asset('uploads/reviews/' . $this->client_image);
    }


    public function getImagePathAttribute()
    {
        $image = Review::where('id', $this->id)->first()->image;
        if (!$image) {
            return asset('default.png');
        }
        return asset('uploads/reviews/' . $this->image);
    }
}
