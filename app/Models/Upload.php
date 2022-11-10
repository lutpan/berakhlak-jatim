<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $table = "data_pendukung";
    // protected $fillable = ['file'];

    public function content()
    {
        return $this->hasMany(Content::class, 'id_content');
    }
}
