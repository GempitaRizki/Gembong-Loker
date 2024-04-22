<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'status',
        'roles', 
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

    //Handle function Min Education = SD
    public function isLastEducationMaxSD(): bool
    {
        $lastEducation = $this->last_education;

        if (!$lastEducation) {
            return false;
        }

        $educationLevels = ['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3'];

        $lastEducationIndex = array_search($lastEducation, $educationLevels);
        return $lastEducationIndex !== false && $lastEducationIndex <= array_search('SD', $educationLevels);
    }
}
