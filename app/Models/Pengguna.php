<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = "pengguna";
    protected $guarded = ['id'];

    // public static function booted(){
    //     static::created(function ($user){
    //         $tenant1 = Tenant::create(['id' => $user->domain]);
    //         $tenant1->domains()->create(['domain' => $user->domain.'.'.env('APP_CENTRAL_DOMAIN') ]);
    //     });
    // }
}
