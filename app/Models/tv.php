<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tv extends Model
{
    use HasFactory;
    protected $table = 'tv_news'; 
    public $timestamps=false;
    protected $fillable = ['title', 'date', 'description'];
}