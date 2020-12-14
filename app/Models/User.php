<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'plant_id',
        'bmc_id',
        'society_id',
        'creater_user_id',
        'working_role',
        'first_name',
        'mid_name',
        'last_name',
        'user_phone_number',
        'email',
        'otp_conformation_status',
        'user_photo',
        'details_status'

    ];

    public function user()
    {
        return $request->all();
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'user_otp',
        'otp_conformation_status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     // * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
