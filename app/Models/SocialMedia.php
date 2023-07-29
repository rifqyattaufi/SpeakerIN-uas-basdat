<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialMedia extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'speaker_id',
        'socialMediaName',
        'socialMediaLink',
    ];

    /**
     * Get the speaker that owns the SocialMedia
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function speaker(): BelongsTo
    {
        return $this->belongsTo(Speaker::class);
    }
}
