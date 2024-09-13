<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title', 'subtitle', 'text']; //TODO: Update $fillable after testing is complete

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
