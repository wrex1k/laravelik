<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = ['name'];

    public static function findByName($name)
    {
        return self::where('name', $name)->first();
    }

    public function notes() {
        return $this->belongsToMany(Note::class, 'note_category');
    }
}