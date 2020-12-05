<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CEO extends Model
{
    protected $fillable = [
        'nama', 'company_name', 'year', 'location', 'sector',
    ];
}
