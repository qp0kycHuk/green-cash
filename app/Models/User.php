<?php

namespace App\Models;

use App\Traits\MustVerifyPhone;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Interfaces\MustVerifyPhone as IMustVerifyPhone;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements IMustVerifyPhone
{
    use HasApiTokens, HasFactory, Notifiable, MustVerifyPhone;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'phone',
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
        'phone_verified_at' => 'datetime',
    ];

    /**
     * Returns a phone number of an array of phone numbers.
     *
     * @return int|array
     */
    public function routeNotificationForSmscru()
    {
        return $this->phone;
    }

    /**
     * Get user by phone
     *
     * @param int $phone
     * @return App\Models\User
     */
    public static function byPhone($phone)
    {
        return self::where('phone', $phone)->first();
    }

    /**
     * Get user by token
     * Retrieving user by temporary token while resetting the password
     *
     * @param string $token
     * @return App\Models\User
     */
    public static function byToken($token)
    {
        return self::where('remember_token', $token)->first();
    }

    /**
     * Check user role
     */
    public function hasRole($role)
    {
        return $this->role === $role;
    }
}