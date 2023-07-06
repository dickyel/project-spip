<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpipGuide extends Model
{
    use HasFactory;
    protected $table = 'spip_guide';
    protected $fillable = [
        'description'
    ];
}
