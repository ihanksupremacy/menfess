<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['isi', 'image', 'user_id'];
    public function comment(){
        return $this->hasMany(comment::class);
    }
    public function likes()
{
    return $this->morphMany('App\Models\Like', 'likable');
}
public function likesCount()
{
    return $this->morphMany(Like::class, 'likeable')->count();
}

}
