<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    use HasFactory;
    protected $fillable = ['name','brnad','color', 'location','no_of_persions','daily_price'];
 
}
 