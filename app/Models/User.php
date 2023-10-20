<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Spatie\Permission\Traits\HasRoles;

use Illuminate\Database\Eloquent\Casts\Attribute;
use PhpParser\Node\Stmt\Return_;

use App\Models\Address;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected function name(): Attribute
    {
        return new Attribute(
            get: fn($value) => ucwords($value),           
            set: fn($value) => strtolower($value)
        );
    }  

    //relacion uno a uno
    public function address(){
        return $this->hasOne(Address::class);
    }

    //relacion uno a muchos (inversa)
    public function userState(){
        return $this->belongsTo(UserState::class);
    }
}
