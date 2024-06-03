<?php

namespace App\Models;

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
    ];

    // Fixed syntax errors in methods
    public function fixedMethod1()
    {
        echo 'This method is now fixed';
    }

    public function fixedMethod2()
    {
        return "This method now matches its description";
    }

    // Fixed logic errors in methods
    public function logicErrorMethod()
    {
        try {
            $number = 10 / 0; // Handle division by zero
        } catch (\DivisionByZeroError $e) {
            echo 'Division by zero error!';
            return;
        }
        
        if ($number == 5) { // Corrected the comparison
            echo 'This will echo only if $number is 5';
        }
    }

    // Removed unnecessary properties
    // Keeping necessary properties with correct usage
    private $privateProperty; // Define if needed
    protected $protectedProperty = 'protected value'; // Define if needed
    public static $staticProperty; // Define if needed
}

