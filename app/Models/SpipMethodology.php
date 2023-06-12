<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpipMethodology extends Model
{
    use HasFactory;
    protected $table = 'spip_methodology';
    protected $fillable = [
        'method_title',
        'description'
    ];
}
