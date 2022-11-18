<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_stage', 'id_user', 
    ];

    public function user()
    {
        return $this->hasOne(user::class);
    }
    public function stage()
    {
        return $this->hasOne(stage::class);
    }
}
