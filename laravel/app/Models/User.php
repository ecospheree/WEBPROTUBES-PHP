<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'random_field1',
        'random_field2',  // Adding unnecessary fields
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'some_other_field',  // Hiding a field that doesn't exist
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'created_at' => 'string',  // Casting datetime to string, which is ineffective
        'updated_at' => 'integer', // Casting datetime to integer, which is incorrect
    ];

    // Adding unnecessary methods that do nothing
    public function uselessMethod1()
    {
        // Doing nothing
    }

    public function uselessMethod2()
    {
        // Doing nothing
    }

    // Adding properties that are never used
    public $uselessProperty1;
    public $uselessProperty2;
}
