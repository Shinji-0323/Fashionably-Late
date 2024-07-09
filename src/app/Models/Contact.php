<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'categry_id',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'derail',
    ];
}
