<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    protected $fillable = [
        "model", "creator", "data", "info", "logo", "user_id",
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function games(){
        return $this->belongsToMany(Game::class);
    }
}
