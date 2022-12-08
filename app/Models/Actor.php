<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actors';

    protected $fillable = [
        'name',
        'gender',
        'biography',
        'dob',
        'birthplace',
        'img_url',
        'popularity',
    ];

    protected $casts = [
        'dob' => 'datetime:d/m/Y',
    ];

    public function characters(){
        return $this->hasMany(MovieActor::class, 'foreign_key');
    }
}
