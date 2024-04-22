<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    use HasFactory;

    protected $table = 'skills';
    protected $fillable =
    [
        'name',
    ];

    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Jobs::class, 'job_skill', 'skill_id', 'job_id');
    }
}
