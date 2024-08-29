<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'description',
        'machines',
        'gender',
        'country',
        'category_id',
        'image_path'
    ];
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
