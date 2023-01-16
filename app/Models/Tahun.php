<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id_tahun';

    public function content()
    {
        return $this->hasMany(Content::class, 'id_content');
    }
}
