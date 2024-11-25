<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function getFilePathAttribute()
    {
        $file = Translation::where('id', $this->id)->first()->file;
        if (!$file) {
            return asset('uploads/default.png');
        }
        return asset( 'uploads/translations/'.$this->file);
    }

    public function getFileTranslationPathAttribute()
    {
        $file_translation = Translation::where('id', $this->id)->first()->file_translation;
        if (!$file_translation) {
            return asset('uploads/default.png');
        }
        return asset( 'uploads/translations/'.$this->file_translation);
    }
}
