<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $table = 'beritas';
    protected $primaryKey = 'id_berita';

    public function getRouteKeyName()
    {
        return 'path_berita';
    }
}
