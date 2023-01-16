<?php

namespace App\Models;

use App\Models\Content;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokumentasi extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $tables = 'dokumentasis';
    protected $pirmaryKey = 'id_dokumentasi';

    public function content()
    {
        $this->belongsTo(Content::class, 'id_content');
    }
}
