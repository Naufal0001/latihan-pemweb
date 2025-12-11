<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speakers extends Model
{
    /** @use HasFactory<\Database\Factories\SpeakersFactory> */
    use HasFactory;

    protected $fillable = [
        'nama_speaker',
        'asal_instansi',
        'topic',
        'summary',
        'foto',
    ];
}
