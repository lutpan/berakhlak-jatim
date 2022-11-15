<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id_kategori';

    public function content()
    {
        return $this->hasMany(Content::class, 'id_content');
    }
}
