<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueFile extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getFilePathAttribute()
    {
        $file = IssueFile::where('id', $this->id)->first()->file;
        if (!$file) {
            return asset('uploads/default.png');
        }
        return asset( 'uploads/issues/'.$this->file);
    }
}
