<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];

    protected $hidden = ['password', 'remember_token',];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function token()
    {
        return $this->hasOne('App\Models\Token');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }


    public function getImagePathAttribute()
    {
        $image = User::where('id', $this->id)->first()->image;
        if (!$image) {
            return asset('default.png');
        }
        return asset('uploads/users/' . $this->image);
    }

    public function getPassportImagePathAttribute()
    {
        $passport_image = User::where('id', $this->id)->first()->passport_image;
        if (!$passport_image) {
            return asset('default.png');
        }
        return asset('uploads/users/' . $this->passport_image);
    }
    public function notifications()
    {
        return $this->hasMany(Notification::class, 'user_id');
    }

    public function issues()
    {
        return $this->hasMany(Issue::class, 'user_id');
    }

    public function translations()
    {
        return $this->hasMany(Translation::class, 'user_id');
    }

    public function meetings()
    {
        return $this->hasMany(Appointment::class, 'user_id');
    }

    public function nationality()
    {
        return $this->belongsTo(Nationality::class, 'nationality_id');
    }


    public function getUserMeetingInfo()
    {
        return $this->hasOne(UserMeeting::class,'user_id','id');
    }
}
