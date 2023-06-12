<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpipEntryMeet extends Model
{
    use HasFactory;
    protected $table = 'spip_entry_meet';
    protected $fillable = [
        'meet_name',
        'meet_description',
        'meet_message',
        'meet_date',
        'meet_time',
        'meet_link',
    ];
}
