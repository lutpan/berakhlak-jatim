<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategoris extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id_kategori';

    public function content()
    {
        return $this->hasMany('App\Content');
    }
}
