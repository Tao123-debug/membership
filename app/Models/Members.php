<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'phone', 
        'address', 
        'membership_start_date', 
        'membership_end_date', 
        'membership_type'
    ];
}
