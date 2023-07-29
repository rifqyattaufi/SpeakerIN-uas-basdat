<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Speaker extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'lastEducation',
        'description',
        'gender',
        'age',
        'price',
        'profilePhoto',
        'city',
        'province',
        'currentJob',
    ];

    /**
     * Get the user that owns the Speaker
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the expertise for the Speaker
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expertise(): HasMany
    {
        return $this->hasMany(Expertise::class);
    }

    /**
     * Get all of the socialMedia for the Speaker
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function socialMedia(): HasMany
    {
        return $this->hasMany(SocialMedia::class);
    }

    /**
     * Get all of the certificate for the Speaker
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function certificate(): HasMany
    {
        return $this->hasMany(Certificate::class);
    }

    //documentation
    /**
     * Get all of the documentation for the Speaker
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentation(): HasMany
    {
        return $this->hasMany(Documentation::class);
    }
}
