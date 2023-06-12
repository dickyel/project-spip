<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpipReport extends Model
{
    use HasFactory;
    protected $table = 'spip_report';
    protected $fillable = [
        'document_title',
        'created_date',
        'thumbnail',
        'document_file',
    ];
}
