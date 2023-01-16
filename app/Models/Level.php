<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id_level';

    public function user()
    {
        return $this->hasMany(User::class, 'id_user');
    }
    public function content()
    {
        return $this->hasMany(Content::class, 'id_content');
    }
}
