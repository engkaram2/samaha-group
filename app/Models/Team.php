<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getImagePathAttribute()
    {
        $image = Team::where('id', $this->id)->first()->image;
        if (!$image) {
            return asset('default.png');
        }
        return asset('uploads/teams/' . $this->image);
    }

    public function issues()
    {
        return $this->hasMany(Issue::class);
    }

}
