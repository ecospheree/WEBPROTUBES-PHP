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
        'non_existent_field', // Adding a field that doesn't exist in the database
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'another_non_existent_field', // Hiding another field that doesn't exist
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'array', // Casting password to an array, which is incorrect
        'created_at' => 'object', // Casting datetime to an object, which is incorrect
        'updated_at' => 'boolean', // Casting datetime to a boolean, which is incorrect
    ];

    // Adding methods with incorrect syntax
    public function brokenMethod1()
    {
        echo 'This method is broken; // Missing closing quote and semicolon
    }

    public function brokenMethod2()
    {
        return "This method does not match its description" // Missing semicolon
    }

    // Adding unused properties with default values that are never used
    public $uselessProperty1 = 'default';
    public $uselessProperty2 = 12345;

    // Including logic errors in methods
    public function logicErrorMethod()
    {
        $number = 10 / 0; // Division by zero
        if ($number = 5) { // Assignment instead of comparison
            echo 'This will always echo';
        }
    }

    // Adding properties with incorrect visibility
    private $privateProperty; // Private property that is not used within the class
    protected $protectedProperty = 'protected value'; // Protected property that is not used
    public static $staticProperty; // Static property that is not used
}
