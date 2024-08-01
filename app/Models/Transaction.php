<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $casts=['date'=>'date'];

    protected $fillable = [
        'client_id',
        'subject_id',
        'transaction_type_id',
        'previous_amount',
        'amount',
        'date',
        'status',
    ];
}
