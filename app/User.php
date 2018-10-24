<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Item;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    // Relations
    public function getInventory()
    {
        return $this->belongsToMany('App\Item', 'inventories', 'user_id', 'object_id')
            ->withPivot('equipado');
    }
    public function getRace()
    {
        return $this->hasOne('App\Race', 'id', 'race_id');
    }
    public function getClass()
    {
        return $this->hasOne('App\ClassCharacter', 'id', 'class_id');
    }
    public function getWeapon()
    {
        return $this->hasOne('App\Item', 'id', 'weapon_id');
    }
    public function getShield()
    {
        return $this->hasOne('App\Item', 'id', 'shield_id');
    }
    public function getArmor()
    {
        return $this->hasOne('App\Item', 'id', 'armor_id');
    }
    public function getHelmet()
    {
        return $this->hasOne('App\Item', 'id', 'helmet_id');
    }
}
