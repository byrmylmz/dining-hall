<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'owner',
        'mail',
        'phone',
        'status',
        'users_id'
    ];
}
