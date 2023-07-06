<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpipWorkLetter extends Model
{
    use HasFactory;
    protected $table = 'spip_work_letter';
    protected $fillable = [
        'work_letter_title',
        'created_date',
        'thumbnail',
        'work_letter_file',
    ];
}
