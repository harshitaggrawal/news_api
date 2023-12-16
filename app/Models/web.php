<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class web extends Model
{
    use HasFactory;
    protected $table = 'web_news'; 
    public $timestamps=false;
    protected $fillable = ['title', 'date', 'description'];
}
