<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function files()
    {
        return $this->hasMany(IssueFile::class);
    }

    public function getImagePathAttribute()
    {
        $image = Issue::where('id', $this->id)->first()->image;
        if (!$image) {
            return asset('default.png');
        }
        return asset('uploads/issues/' . $this->image);
    }
    public function issueFiles()
    {
        return $this->hasMany(IssueFile::class);
    }
}
