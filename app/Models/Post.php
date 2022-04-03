<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $primaryKey = 'id';

    protected $fillable = ['title','description','ingredients','cooking_time'];

    public function categories()
    {
      return $this->belongsToMany(Category::class);
    }
}