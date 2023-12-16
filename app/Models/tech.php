<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tech extends Model
{
    use HasFactory;
    protected $table = 'tech_news'; 
    public $timestamps=false;
    protected $fillable = ['title', 'date', 'description'];
}
