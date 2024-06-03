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
        // Removed 'non_existent_field'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        // Removed 'another_non_existent_field'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        // Corrected the casts
    ];

    // Fixed syntax errors in methods
    public function brokenMethod1()
    {
        echo 'This method is now fixed';
    }

    public function brokenMethod2()
    {
        return "This method now matches its description";
    }

    // Removed unused properties

    // Fixed logic errors in methods
    public function logicErrorMethod()
    {
        try {
            $number = 10 / 0; // Handle division by zero
        } catch (\DivisionByZeroError $e) {
            echo 'Division by zero error!';
        }
        
        if ($number == 5) { // Corrected the comparison
            echo 'This will echo only if $number is 5';
        }
    }

    // Removed properties with incorrect visibility or left them if they are necessary
    private $privateProperty; // Keep if needed
    protected $protectedProperty = 'protected value'; // Keep if needed
    public static $staticProperty; // Keep if needed
}

