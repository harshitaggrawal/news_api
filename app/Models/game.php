<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;
    protected $table = 'game_news'; 
    public $timestamps=false;
    protected $fillable = ['title', 'date','image','description'];
}
