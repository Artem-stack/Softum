<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use UuidTrait, HasFactory;

    protected $table = 'email';

    protected $fillable = [
    	'ip',
        'agent',
        'type',
        'emailRecipient',
        'emailBcc',
        'emailCc',
        'emailSubject',
        'emailBody',
    ];
}
