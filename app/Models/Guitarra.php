<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guitarra extends Model
{
    use HasFactory;
    protected $fillable = [
        'modelo', 'marca', 'ano', 'cor', 'valor'
    ]; 
}
