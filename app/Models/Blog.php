<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function getImagePathAttribute()
    {
        $image = Blog::where('id', $this->id)->first()->image;
        if (!$image) {
            return asset('default.png');
        }
        return asset('uploads/blogs/' . $this->image);
    }

    public function getPageImagePathAttribute()
    {
        $page_image = Blog::where('id', $this->id)->first()->page_image;
        if (!$page_image) {
            return asset('default.png');
        }
        return asset('uploads/blogs/' . $this->page_image);
    }
}
