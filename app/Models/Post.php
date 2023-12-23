<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['id', 'nama_penulis', 'title', 'content', 'slug', 'created_at'];

    // public function User()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
