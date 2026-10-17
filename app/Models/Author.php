<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory; // <-- Pastikan baris ini ada di dalam class

    protected $fillable = ['name', 'email', 'bio'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
