<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consol extends Model
{
    use HasFactory;
    protected $fillable = [
        "name", "creator", "logo", "info", "data", "user_id",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function games(){
        return $this->belongsToMany(Game::class);
    }
    
}
