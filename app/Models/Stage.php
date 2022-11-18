<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre', 'entreprise', 'ville', 'description'
    ];

    public function favoris()
    {
        return $this->hasMany(favoris::class);
    }
}
