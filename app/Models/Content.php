<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Cviebrock\EloquentSluggable\Sluggable;

class Content extends Model
{
    use HasFactory;
    // use Sluggable;

    protected $guarded = [];
    // protected $table = "contents";
    protected $primaryKey = 'id_content';
    // DB::table('contents');   
    // protected $fillable = ['latar_belakang', 'kategori'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function getRouteKeyName()
    {
        return 'path';
    }

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => ['nama_budaya_kerja', 'id_content']
    //         ]
    //     ];
    // }
}
