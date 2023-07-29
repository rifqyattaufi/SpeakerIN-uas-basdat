<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Expertise extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'expertiseName',
        'expertiseDescription'
    ];

    /**
     * Get all of the Speaker for the Expertise
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function speaker(): BelongsToMany
    {
        return $this->belongsToMany(Expertise::class);
    }
}
