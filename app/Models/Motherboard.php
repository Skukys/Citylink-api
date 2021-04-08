<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motherboard extends Model
{
    protected $table = 'motherboard';
    protected $fillable = ['name', 'image', 'brand', 'socket', 'ram', 'max-tdp', 'ram-type', 'sata', 'm2', 'pci'];
    use HasFactory;
}
