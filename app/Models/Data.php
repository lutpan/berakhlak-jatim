<?php

namespace App\Models;

use App\Models\Content;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Data extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'data_pendukung';
    protected $primaryKey = 'id_data_pendukung';


    public function content()
    {
        return $this->belongsTo(Content::class, 'id_content');
    }
}
