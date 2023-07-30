<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise_Speaker extends Model
{
    use HasFactory;

    protected $table = 'expertise_speaker';
    protected $fillable = [
        'expertise_id',
        'speaker_id',
    ];
}
