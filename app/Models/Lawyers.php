<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyers extends Model
{
    /** @use HasFactory<\Database\Factories\LawyersFactory> */
    use HasFactory;
    protected $fillable = ['name', 'phone', 'address', 'department_id', 'years_of_experience'];
}
