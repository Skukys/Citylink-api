<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Power extends Model
{
    protected $table = 'power';
    protected $fillable = ['name', 'image', 'power', 'reyt', 'brand'];
    use HasFactory;
}
