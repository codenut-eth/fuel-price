<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\ResetPassword;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',        // Unique user identifier
        'title',          // Title (Mr, Ms, etc.)
        'first_name',     // First name
        'middle_name',    // Middle name
        'surname',        // Surname/Last name
        'category',       // Category (Admin, User type, etc.)
        'date_of_birth',  // Date of birth
        'city',           // City of residence
        'state',          // State of residence
        'country',        // Country of residence
        'zip',            // Zip code
        'identity_doc',   // Identity document details
        'photo',          // User photo reference
        'model',          // Model (possibly vehicle model)
        'rego',           // Registration number (if vehicle-related)
        'make',           // Make (if vehicle-related)
        'year',           // Year (if vehicle-related)
        'email',          // Email address
        'password',       // Password for authentication
        'status',         // User status (active, inactive)
        'name',           // Full name or combined name field
        'phone1',         // Primary phone number
        'phone2',         // Secondary phone number
        'street_address', // Street address
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

}
