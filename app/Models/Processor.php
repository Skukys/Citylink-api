<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    protected $table = 'processor';
    protected $fillable = ['name', 'image', 'brand', 'socket', 'yad', 'base', 'max', 'kash', 'tdp'];
    use HasFactory;
}
