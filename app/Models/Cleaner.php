<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cleaner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'national_id',
        'address',
        'hire_date',
        'status',
        'image',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'hire_date' => 'date',
    ];
}
