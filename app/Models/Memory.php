<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{
    protected $table = 'memory';
    protected $fillable = ['name', 'image', 'brand', 'ram-type', 'frequency', 'value'];
    use HasFactory;
}
