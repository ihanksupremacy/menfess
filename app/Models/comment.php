<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    public function post(){
        return $this->BelongsTo(Post::class);
    }
    public function user(){
        return $this->BelongsTo(user::class);
    }
}
