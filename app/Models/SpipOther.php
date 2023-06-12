<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpipOther extends Model
{
    use HasFactory;
    protected $table = 'spip_other';
    protected $fillable = [
        'video_url',
        'description'
    ];
}
