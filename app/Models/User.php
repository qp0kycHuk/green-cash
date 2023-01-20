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
        'last_name',
        'patronymic',
        'phone',
        'photo',
        'password',
        'role',
        'position',
        'access',
        'status'
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
     * User roles
     */
    public function hasRole($roles)
    {
        return collect($roles)->first(function ($value, $key) {
            return $value === $this->role;
        });
    }

    /**
     * Check user status
     */
    public function status()
    {
        return (bool) $this->status;
    }
}
