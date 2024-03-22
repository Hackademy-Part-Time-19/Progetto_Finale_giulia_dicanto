<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function workout () {
        return $this->belongsToMany(Workout::class);
    }

    protected $fillable =['name'];
}
