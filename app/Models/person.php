<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    use HasFactory;
    protected $fillable=[
            'name',
            'email',
            'phone',
            'status',
            'position',
            'card_id',
            'users_id',
            'companies_id'
    ];
}
